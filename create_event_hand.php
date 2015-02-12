<?php
include("/db/sql.php");

/* Get form values from create_event.php */
$season = $_POST["season"];
$event_num = $_POST["event_num"];
$event_name = $_POST["event_name"];
$event_date = $_POST["event_date"];

/* Create new event */
$sql_new_event = "INSERT INTO rs_events (event_num, event_name, event_date)
	VALUES ( '" . $event_num . "', '" . $event_name . "', '" . $event_date . "')";

$lastId = dbInsert($sql_new_event);

if($lastId !== -1) {
	/* If new event creation is successful, insert new players and rankings */

	$results = array(
		"player_rank_1" => array(
			"rank" => 1,
			"name" => $_POST["player_rank_1"]
			),
		"player_rank_2" => array(
			"rank" => 2,
			"name" => $_POST["player_rank_2"]
			),
		"player_rank_3" => array(
			"rank" => 3,
			"name" => $_POST["player_rank_3"]
			),
		"player_rank_4" => array(
			"rank" => 4,
			"name" => $_POST["player_rank_4"]
			),
		"player_rank_5" => array(
			"rank" => 5,
			"name" => $_POST["player_rank_5"]
			),
		"player_rank_5_2" => array(
			"rank" => 5,
			"name" => $_POST["player_rank_5-2"]
			),
		"player_rank_7" => array(
			"rank" => 7,
			"name" => $_POST["player_rank_7"]
			),
		"player_rank_7_2" => array(
			"rank" => 7,
			"name" => $_POST["player_rank_7-2"]
			),
		"player_rank_9" => array(
			"rank" => 9,
			"name" => $_POST["player_rank_9"]
			),
		"player_rank_9_2" => array(
			"rank" => 9,
			"name" => $_POST["player_rank_9-2"]
			),
		"player_rank_9_3" => array(
			"rank" => 9,
			"name" => $_POST["player_rank_9-3"]
			),
		"player_rank_9_4" => array(
			"rank" => 9,
			"name" => $_POST["player_rank_9-4"]
			),
		"player_rank_13" => array(
			"rank" => 13,
			"name" => $_POST["player_rank_13"]
			),
		"player_rank_13_2" => array(
			"rank" => 13,
			"name" => $_POST["player_rank_13-2"]
			),
		"player_rank_13_3" => array(
			"rank" => 13,
			"name" => $_POST["player_rank_13-3"]
			),
		"player_rank_13_4" => array(
			"rank" => 13,
			"name" => $_POST["player_rank_13-4"]
			)
	);

	$keys = array_keys($results);

	foreach($keys as $key) {
		if($results[$key]["name"] !== "") {
			echo $results[$key]["rank"] . ": " . $results[$key]["name"] . "<br>";
		}
	}

	/*$sql_new_event_result = "INSERT INTO rs_event_results (season_id, rank, points)
		VALUES
		( '" . $lastId . "', '1', '" . $rank_1_pts ."'),
		( '" . $lastId . "', '2', '" . $rank_2_pts ."'),
		( '" . $lastId . "', '3', '" . $rank_3_pts ."'),
		( '" . $lastId . "', '4', '" . $rank_4_pts ."'),
		( '" . $lastId . "', '5', '" . $rank_5_pts ."'),
		( '" . $lastId . "', '7', '" . $rank_7_pts ."'),
		( '" . $lastId . "', '9', '" . $rank_9_pts ."'),
		( '" . $lastId . "', '13', '" . $rank_13_pts ."')";

	dbInsert($sql_new_rank_pts);*/
}
?>
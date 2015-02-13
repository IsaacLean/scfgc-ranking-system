<?php
include("/db/sql.php");

/* Get form values from create_season.php */
$season_name = $_POST["season_name"];
$date_start = $_POST["date_start"];
$date_end = $_POST["date_end"];
$rank_1_pts = $_POST["rank_1_pts"];
$rank_2_pts = $_POST["rank_2_pts"];
$rank_3_pts = $_POST["rank_3_pts"];
$rank_4_pts = $_POST["rank_4_pts"];
$rank_5_pts = $_POST["rank_5_pts"];
$rank_7_pts = $_POST["rank_7_pts"];
$rank_9_pts = $_POST["rank_9_pts"];
$rank_13_pts = $_POST["rank_13_pts"];

/* Create new season */
$sql_new_season = "INSERT INTO rs_seasons (season_name, date_start, date_end)
	VALUES ('" . $season_name . "', '" . $date_start ."', '" . $date_end ."')";

$lastId = dbInsert($sql_new_season);

if($lastId !== -1) {
	/* If new season creation is successful, insert new rankings and points for it */
	$sql_new_rank_pts = "INSERT INTO rs_season_pts (season_id, rank, points)
		VALUES
		( '" . $lastId . "', '1', '" . $rank_1_pts ."'),
		( '" . $lastId . "', '2', '" . $rank_2_pts ."'),
		( '" . $lastId . "', '3', '" . $rank_3_pts ."'),
		( '" . $lastId . "', '4', '" . $rank_4_pts ."'),
		( '" . $lastId . "', '5', '" . $rank_5_pts ."'),
		( '" . $lastId . "', '7', '" . $rank_7_pts ."'),
		( '" . $lastId . "', '9', '" . $rank_9_pts ."'),
		( '" . $lastId . "', '13', '" . $rank_13_pts ."')";

	dbInsert($sql_new_rank_pts);
}

/* Redirect to manage_seasons.php */
header('Location: /manage_seasons.php');
?>
<?php
include("/db/sql.php");

/* Get form values from create_season.php */
$season_id = $_GET["season_id"];
$season_num = $_POST["season_num"];
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
$sql_update_season = "UPDATE rs_seasons SET 
	season_num = '" . $season_num . "', season_name = '" . $season_name . "', date_start = '" . $date_start . "', date_end = '" . $date_end . "' WHERE id = " . $season_id;
$success = dbUpdate($sql_update_season);

if($success) {
	/* If season update is successful, update new rankings and points for it */
	$sql_update_rank_pts = "UPDATE rs_season_pts
			SET points = CASE rank
				WHEN 1 THEN " . $rank_1_pts . "
				WHEN 2 THEN " . $rank_2_pts . "
				WHEN 3 THEN " . $rank_3_pts . "
				WHEN 4 THEN " . $rank_4_pts . "
				WHEN 5 THEN " . $rank_5_pts . "
				WHEN 7 THEN " . $rank_7_pts . "
				WHEN 9 THEN " . $rank_9_pts . "
				WHEN 13 THEN " . $rank_13_pts . "
			END
		WHERE `season_id` = " . $season_id;
	dbUpdate($sql_update_rank_pts);
}

/* Redirect to manage_seasons.php */
header('Location: /manage_seasons.php');
?>
<?php
include("/db/sql.php");

/* Get form values from create_event.php */
$season = $_POST["season"];
$event_num = $_POST["event_num"];
$event_name = $_POST["event_name"];
$event_date = $_POST["event_date"];
$player_rank_1 = $_POST["player_rank_1"];
$player_rank_2 = $_POST["player_rank_2"];
$player_rank_3 = $_POST["player_rank_3"];
$player_rank_4 = $_POST["player_rank_4"];
$player_rank_5 = $_POST["player_rank_5"];
$player_rank_5_2 = $_POST["player_rank_5-2"];
$player_rank_7 = $_POST["player_rank_7"];
$player_rank_7_2 = $_POST["player_rank_7-2"];
$player_rank_9 = $_POST["player_rank_9"];
$player_rank_9_2 = $_POST["player_rank_9-2"];
$player_rank_9_3 = $_POST["player_rank_9-3"];
$player_rank_9_4 = $_POST["player_rank_9-4"];
$player_rank_13 = $_POST["player_rank_13"];
$player_rank_13_2 = $_POST["player_rank_13-2"];
$player_rank_13_3 = $_POST["player_rank_13-3"];
$player_rank_13_4 = $_POST["player_rank_13-4"];

echo $season;
echo $event_num;
echo $event_name;
echo $event_date;
echo $player_rank_1;
echo $player_rank_2;
echo $player_rank_3;
?>
<?php
include("/db/sql.php");

/* Get form values from create_event.php */
$season = $_POST["season"];
$event_num = $_POST["event_num"];
$event_name = $_POST["event_name"];
$event_date = $_POST["event_date"];

echo $season;
?>
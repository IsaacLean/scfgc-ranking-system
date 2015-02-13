<?php
include("/db/sql.php");

$sql_rs_seasons = "CREATE TABLE rs_seasons (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    season_name VARCHAR(30) NOT NULL,
    date_start DATE,
    date_end DATE
)";

$sql_rs_season_pts = "CREATE TABLE rs_season_pts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    season_id INT(6) NOT NULL,
    rank INT(6) NOT NULL,
    points INT(6) NOT NULL
)";

$sql_rs_events = "CREATE TABLE rs_events (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(30) NOT NULL,
    event_date DATE
)";

$sql_rs_event_results = "CREATE TABLE rs_event_results (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    season_id INT(6) NOT NULL,
    event_id INT(6) NOT NULL,
    player_rank INT(6) NOT NULL,
    player_name VARCHAR(30) NOT NULL
)";

echo "<b>DATABASE SETUP</b><br>";

if(dbCmd($sql_rs_seasons))
    echo "Create rs_seasons: SUCCESS<br>";
else
    echo "Create rs_seasons: FAIL<br>";

if(dbCmd($sql_rs_season_pts))
    echo "Create rs_season_pts: SUCCESS<br>";
else
    echo "Create rs_seasons_pts: FAIL<br>";

if(dbCmd($sql_rs_events))
    echo "Create sql_rs_events: SUCCESS<br>";
else
    echo "Create sql_rs_events: FAIL<br>";

if(dbCmd($sql_rs_event_results))
    echo "Create sql_rs_event_results: SUCCESS<br>";
else
    echo "Create sql_rs_event_results: FAIL<br>";
?>
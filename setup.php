<?php
include("/db/sql.php");

$sql_rs_seasons = "CREATE TABLE rs_seasons (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    season_num INT(6) NOT NULL,
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

echo "DATABASE SETUP<br>";

if(dbCmd($sql_rs_seasons))
    echo "Create rs_seasons: SUCCESS<br>";
else
    echo "Create rs_seasons: FAIL<br>";

if(dbCmd($sql_rs_season_pts))
    echo "Create rs_season_pts: SUCCESS<br>";
else
    echo "Create rs_seasons_pts: FAIL<br>";
?>
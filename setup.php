<?php
include("/db/cmd.php");

$sql = "CREATE TABLE rs_seasons (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    season_name VARCHAR(30) NOT NULL,
    date_start TIMESTAMP,
    date_end TIMESTAMP
)";

echo "DATABASE SETUP<br>";

if(dbCmd($sql))
    echo "Create rs_seasons: SUCCESS<br>";
else
    echo "Create rs_seasons: FAIL<br>";
?>

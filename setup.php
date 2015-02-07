<?php
include("/db/config.php");

try {
	/* Connect to server */
    $conn = new PDO("mysql:host=$dbhost;dbname=scfgc_rs_db", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    /* Create tables */
    // Create the SQL commands
    $sql_rs_seasons = "CREATE TABLE rs_seasons (
    		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    		season_name VARCHAR(30) NOT NULL,
    		date_start TIMESTAMP,
    		date_end TIMESTAMP
    	)";

	// Execute the SQL commands
    $conn->exec($sql_rs_seasons);
    echo "Table rs_seasons created successfully";
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>

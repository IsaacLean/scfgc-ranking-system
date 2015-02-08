<?php
include("config.php");

function dbCmd($sql) {
	try {
		global $dbHost;
		global $dbName;
		global $username;
		global $password;

		/* Connect to server */
	    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $username, $password);
	    // Set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Execute the SQL command
	    $conn->exec($sql);
	    return True;
	} catch(PDOException $e) {
		return False;
	}
}
?>
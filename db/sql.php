<?php
include("config.php");

/* Run any SQL command */
function dbCmd($sql) {
	global $dbHost;
	global $dbName;
	global $username;
	global $password;

	try {
		/* Connect to server */
	    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $username, $password);
	    // Set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		/* Execute the SQL command */
	    $conn->exec($sql);

	    // If command succeeds, return True
	    return True;
	} catch(PDOException $e) {
		// If command fails, return False
		return False;
	}
}

/* Specialized function to run SQL insertion commands */
function dbInsert($sql) {
	global $dbHost;
	global $dbName;
	global $username;
	global $password;

	try {
		/* Connect to server */
	    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $username, $password);
	    // Set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    /* Execute the SQL command */
	    $conn->exec($sql);

	    // If command succeeds, get ID for most recent inserted record and return it
	    $last_id = $conn->lastInsertId();
	    return $last_id;
	} catch(PDOException $e) {
		// If command fails, return -1
	    return -1;
	}

	$conn = null;
}

function dbQuery($sql) {
	global $dbHost;
	global $dbName;
	global $username;
	global $password;

	try {
	    /* Connect to server */
	    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $username, $password);
	    // Set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    /* Execute the SQL command */
	    $stmt = $conn->prepare($sql); 
	    $stmt->execute();

	    // 
	    $stmt->setFetchMode(PDO::FETCH_ASSOC);
	    $result = $stmt->fetchAll();
	    return $result;
	}
	catch(PDOException $e) {
	    return null;
	}
}
?>
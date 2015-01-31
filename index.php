<?php
	$serveraddr = "localhost";
	$username = "admin";
	$password = "password";

	// Create connection
	$conn = new mysqli($serveraddr, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connection successful";
?>
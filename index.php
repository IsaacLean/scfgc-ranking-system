<?php
$dbhost = "localhost";
$username = "admin";
$password = "password";

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=scfgc_rs_db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>

<?php
$executeFunc = function($inputFunc) {
	$inputFunc();
};

$herroWorld = function() {
	echo("herro world");
};

$executeFunc($herroWorld);
?>
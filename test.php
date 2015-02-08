<?php
function queryTest($inputFunc) {
	$inputFunc();
}

$herroWorld = function() {
	echo("herro world");
};

queryTest($herroWorld);
?>
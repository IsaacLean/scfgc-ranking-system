<?php
function queryTest($inputFunc) {
	$inputFunc();
}

$herroWorld = function() {
	echo("herro world");
};

//queryTest($herroWorld);

$test = array(
    "test" => 1,
    "test2" => 9,
    "test3" => 20,
    "test4" => 3
);

function println($input) {
	echo $input . "<br>";
}

println($test["test"]);
$test["test"] += 32;
println($test["test"]);
if(array_key_exists("test5", $test))
	echo "yes<br>";
else
	echo "no<br>";

foreach($test as $key => $val) {
	echo "$key = $val<br>";
}

echo "<br>";

arsort($test);

foreach($test as $key => $val) {
	echo "$key = $val<br>";
}

echo "<br>";

$testpush = [];
$testpush["test"] = 3;
print_r($testpush);
?>
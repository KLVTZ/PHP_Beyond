<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variable Variables</title>
</head>
<body>
	<?php 

	$a = "hello";
	$hello = "Hello Everyone.";
	echo $a . "<br>";
	echo $hello . "<br>";


	echo ${$a};
	echo "<br>";


	$a = 'Kevin';
	$b = 'Mary';
	$c = 'Mike';
	$d = 'Larry';
	$e = 'Audrey';


	$students = array('a', 'c', 'd');
	foreach ($students as $seat) {
		echo $$seat . "<br>";
	}

	// Does $$var[1] mean:
	// #1 get the first element then evaluate dynamically
	// #2 evaluate dynamically then get the first element

	// use {} to make it clear or distinction
	// echo ${var[1]}; // for #1
	// echo ${var}[1]; // for #2

	$Mike = 'Jeff';
	$Justin = 'Mike';
	$Jeff = 'Mike';
	$Alice = "Bob";

	$Bob = array('Mike', 'Bob', 'Jeff');


	echo ${$Alice}[2]; // Jeff think $bob[2] = "Jeff"

	echo "<br>";

	echo ${$Bob[2]}; // Mike -> think $jeff = 'Mike'

	 ?>
</body>
</html>
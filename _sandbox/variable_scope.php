<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variable Scope</title>
</head>
<body>
	<?php 

	// global scope
	$var = 1;

	function test1() {
		// local
		$var = 2;
		echo $var . "<br>";
	}

	test1();
	echo $var . "<br>";
	echo "<hr>";


	$var = 1;

	function test2() {
		global $var;
		$var = 2;
		echo $var . "<br>";
	}

	test2();
	echo $var . "<br>";

	echo "<hr>";


	$var = 1;
 
	function test3() {
		// works as a counter variable
		static $var = 2; 
		echo $var . "<br>";
		$var++;
	}

	test3();
	test3();
	test3();
	echo $var . "<br>";


	 ?>
</body>
</html>
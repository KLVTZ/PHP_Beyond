<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>References as Return Values</title>
</head>
<body>
	<?php 

	function &ref_return() {
		global $a;
		$a = $a * 2;
		return $a;
	}


	$a = 10;
	$b =& ref_return();


	echo "a: {$a} / b: {$b}<br>"; // a: 20 /b: 20 
	$b = 30;
	echo "a: {$a} / b: {$b}<br>"; // a:30 /b: 30



	function &increment() {
		static $var = 0;
		$var++;
		return $var;
	}

	$a =& increment();
	increment();
	$a++;
	increment();
	echo "a: {$a}<br>"; // a:4

	 ?>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>References Assignment</title>
</head>
<body>
	<?php 


	$a = 1;
	$b = $a;
	$b = 2;

	echo "a:{$a} / b: {$b}<br>";

	// reference assigment, referencs the same thing or the same
	// computer memory of A -like an alias to another thing
	$a = 1;
	$b =& $a;
	$b = 2;

	echo "a:{$a} / b: {$b}<br>";

	unset($b);


	echo "a:{$a} / b: {$b}<br>";


	 ?>
</body>
</html>
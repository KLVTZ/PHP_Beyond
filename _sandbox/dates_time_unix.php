<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dates and Times: Unix</title>
</head>
<body>
	<?php 

	echo time();
	echo "<br>";
	echo mktime(2, 30, 45, 10, 1, 2014);
	echo "<br>";

	// check date
	echo checkdate(12, 31, 2000) ? 'true' : 'false';

	echo "<br>";

	echo checkdate(2, 40, 2000) ? 'true' : 'false';

	echo "<br>";



	// interprets different values
	$unix_timestap = strtotime("10 June 1993");
	echo "My date is: " . $unix_timestap . "<br>";
	$unix_timestap = strtotime("now");
	echo $unix_timestap . "<br>";
	$unix_timestap = strtotime("last monday");
	echo $unix_timestap . "<br>";

	 ?>
</body>
</html>
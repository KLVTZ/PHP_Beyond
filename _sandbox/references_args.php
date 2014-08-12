<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>References as Function Arguments</title>
</head>
<body>
	<?php 

	// rename in local context but contain the global value
	// because of referene -similar to using global var
	function ref_test(&$var) {
		$var = $var * 2;
	}

	$a = 10;
	ref_test($a);
	echo $a;

	 ?>
</body>
</html>
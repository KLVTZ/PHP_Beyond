<?php 


// like fopen/fread/fclose
// opendir()
// readdir()
// closedir()
$dir = '.';
if(is_dir($dir)) {
	if($dir_handle = opendir($dir)) {
		while ($filename = readdir($dir_handle)) {
			echo "filename: {$filename}<br>";
		}
		// use rewinddir($dir_handle) to start over
		closedir($dir_handle);
	}
}

// scandir(): 
echo "<hr>";
if(is_dir($dir)) {
	$dir_array = scandir($dir);
	foreach ($dir_array as $file) {
		if(stripos($file, '.') > 0) {
			echo "filename: {$file}<br>"; 
		}
	}
}

 ?>

<?php 


echo __FILE__ . "<br>";
echo __LINE__ . "<br>"; // be careful once you include files -not what you might expect
echo __DIR__ . "<br>"; //  current directory

echo file_exists(__FILE__) ? 'yes' : 'no';
echo "<br>";
echo file_exists(__DIR__ . "/basic.html") ? 'yes' : 'no';
echo "<br>";

// works on directory system
echo file_exists(__DIR__) ? 'yes' : 'no';
echo "<br>";

// for strict, is file method?
echo is_file(__DIR__ . "/basic.html") ? 'yes' : 'no';
echo "<br>";
echo is_file(__DIR__) ? 'yes' : 'no';
echo "<br>";

// for strict, is dir method?
echo is_dir(__DIR__ . "/basic.html") ? 'yes' : 'no';	
echo "<br>";
echo is_dir(__FILE__) ? 'yes' : 'no';

 ?>
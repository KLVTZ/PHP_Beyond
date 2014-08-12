<?php 
// with static methods you can't use $this!
class Student {
	static $total_students = 0;

	static public function add_students() {
		self::$total_students++;
	}

	static function welcome_students($var="Hello") {
		echo "{$var} students.";
	}
}

echo Student::$total_students . "<br>";
$total_students = 20;
echo Student::welcome_students() . "<br>";
echo Student::welcome_students("Greetings") . "<br>";
Student::$total_students = 1;
echo Student::$total_students . "<br>";
$make::an_error();


// static variables are shared throughout the inheritance tree.

class One {
	static $foo;
}
class Two extends One {}
class Three extends One {}

One::$foo = 1;
Two::$foo = 2;
Three::$foo = 3;
echo One::$foo;		// 3
echo Two::$foo;		// 3
echo Three::$foo;	// 3




 ?>
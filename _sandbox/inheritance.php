<?php 

class Car {
	public $wheels = 4;
	public $doors = 4;

	function wheelsdoors() {
		return $this->wheels + $this->doors;
	}
}

class CompactCar extends Car {
	public $doors = 2;

	function wheelsdoors() {
		return $this->wheels + $this->doors + 100;
	}
}

$car1 = new Car();
$car2 = new CompactCar();

echo $car1->wheels . "<br>";
echo $car1->doors . "<br>";
echo $car1->wheelsdoors() . "<br>";
echo "<hr>";

echo $car2->wheels . "<br>";
echo $car2->doors . "<br>";
echo $car2->wheelsdoors() . "<br>";
echo "<hr>";

echo "Car parent: " . get_parent_class('Car') . "<br>";
echo "CompactCar parent: " . get_parent_class('CompactCat') . "<br>";
echo "<br>";
echo is_subclass_of('Car', 'Car') ? 'true' : 'false';
echo "<br>";
echo is_subclass_of('CompactCar', 'Car') ? 'true' : 'false';
echo "<br>";
echo is_subclass_of('Car', 'CompactCar') ? 'true' : 'false';
echo "<br>";




 ?>
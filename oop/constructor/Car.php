<?php

require "vehicle.php";

class Car extends Vehicle{
	
	public $color;
	
	public function __construct($cap, $fuel, $color){
		parent::__construct($cap, $fuel);
		$this->color = $color;
	}
	
}

$car = new Car(25, 30, 'Red');

echo $car->capacity();
echo "<br>";
echo $car->fuelAmount();
echo "<br>";
echo $car->color;


?>
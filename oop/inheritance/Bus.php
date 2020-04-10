<?php

require "vehicle.php";

final class Bus extends Vehicle{
	
	public function display(){
		echo 'Capacity is :'. $this->capacity . '<br>';
		$this->capacity = 40;
		echo "Welcome to Bus";
	}
	
	final public function fuelAmount(){
		return 50;
	}
	
}

$bus = new Bus();

echo $bus->display();
echo "<br>";
echo $bus->capacity();

echo "<br>";
echo 'Fuel Amount is: ' . $bus->fuelAmount();


?>
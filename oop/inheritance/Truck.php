<?php

require "vehicle.php";

class Truck extends Vehicle{
	
	public function message(){
		parent::message();
		echo "This is Truck <br>";
	}
	
}

$track = new Truck();

echo $track->message();



?>
<?php

 require "vehicle.php";
 
 class Car implements Vehicle{
	 
	 public function display(){
		 return "Welcome";
	 }
	 
	 public function capacity(){
	   return 15;
	}
	 
	 public function fuelAmount(){
		 return 50;
	 }
	
 }
 
 $car = new Car();
 echo $car->capacity();
 echo "<br>";
 echo $car->fuelAmount();

?>
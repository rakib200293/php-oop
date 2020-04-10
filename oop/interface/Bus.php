<?php

 require "vehicle.php";
 
 class Bus implements Vehicle{
	 
	 public function display(){
		 return "Welcome";
	 }
	 
	 public function capacity(){
	   return 15;
	}
	 
	 public function fuelAmount(){
		 return 50;
	 }
	 public function applyBrakes(){
		 return "Braked";
	 }
 }
 
 $bus = new Bus();
 echo $bus->capacity();
 echo "<br>";
 echo $bus->fuelAmount();

?>
<?php

 require "vehicle.php";
 
 class Bus extends Vehicle{
	 
	
	 public function capacity(){
	   return 15;
	}
	 
	 public function fuelAmount(){
		 return 50;
	 }
	
 }
 
 $bus = new Bus();
 echo $bus->capacity();
 echo "<br>";
 echo $bus->fuelAmount();

?>
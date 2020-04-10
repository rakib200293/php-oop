<?php

 class Vehicle{
	 protected $capacity = 15;
	 
	 public function getCapacity(){
		 return $this->capacity;
	 }
	 
	 
 }
 
 class Bus extends Vehicle{
	 
	 public function updateCapacity(){
		 $this->capacity = 25;
	 }
 }
 
 $bus = new Bus();
 echo $bus->getCapacity();
 echo "<br>";
 
 $bus->updateCapacity();
 echo $bus->getCapacity();


?>
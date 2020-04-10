<?php

 class Vehicle{
	 
	 public $capacity;
	 public $fuelAmount;
	 
	 public function __construct($cap, $fuel){
		 $this->capacity = $cap;
		 $this->fuelAmount = $fuel;
		 
	 }
	 
	 public function fuelAmount(){
		 return $this->fuelAmount;
	 }
	 
	 public function capacity(){
		 return $this->capacity;
	 }
	 
	 public function applyBreakes(){
		 return "Braked";
	 }
	 
 }

?>
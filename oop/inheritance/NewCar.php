<?php
require "Car.php";

class NewCar extends car{
	
}

$newCar = new NewCar();
echo $newCar->applyBreakes();


?>
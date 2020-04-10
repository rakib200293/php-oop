<?php
require "Bus.php";

class GreenBus extends Bus{
	
	public function fuelAmount(){
		return 50;
}
}

$GreenBus = new GreenBus();
echo "<br>";
echo $GreenBus->applyBreakes();


?>
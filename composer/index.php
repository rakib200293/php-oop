<?php

require "src/test/vehicle.php";
require "src/test/bus.php";

use src\test\Bus;

$obj = new src\test\vehicle(); 
$obj->fuelAmount();

echo "<br>";

$bus = new Bus();
$bus->test();

?>
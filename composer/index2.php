<?php

require "vendor/autoload.php";


use App\test\Bus;

$obj = new App\test\vehicle(); 
$obj->fuelAmount();

echo "<br>";

$bus = new Bus();
$bus->test();

echo "<br>";
$bus->message();

?>
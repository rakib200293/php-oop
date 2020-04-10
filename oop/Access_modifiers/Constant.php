<?php

 class Constant{
	 const PI = 3.1416;
   
   public function area($r){
	   return self::PI * $r * $r;
   }
 
 }
 
 echo Constant::PI;
 echo "<br>";
 
 $con = new Constant();
 echo $con->area(2);

?>
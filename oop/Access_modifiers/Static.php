<?php
 class Person{
	 
	 public static $name = "Rakib";
	 
	 public static function display(){
		 echo "Hellow World !";
	 }
	 
	 
	 public function getName(){
		 return self::$name;
	 }
	 
 }
 
 Person::display();
 echo "<br>";
 echo Person::$name;
 echo "<br>";
 
 $obj = new Person();
 $obj2 = new Person();
 
 echo "From Object 1 :". $obj->getName();
 echo "<br>";
 echo "From Object 2 :". $obj2->getName();
 echo "<br>";
 
 Person::$name = "Islam";
 
 echo "From Object 1 :". $obj->getName();
 echo "<br>";
 echo "From Object 2 :". $obj2->getName();



?>
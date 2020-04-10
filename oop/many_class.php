<?php
 
 class A{
	 
	 public function welcome(){
		 echo "Welcome to A";
	 }
 }
 class B{
	 
	 public function welcome(){
		 echo "Welcome to B";
	 }
 }
 
 $a = new A();
 $b = new B();
 
 $a->welcome();
 echo "<br/>";
 $b->welcome();
 echo "<br/>"

?>
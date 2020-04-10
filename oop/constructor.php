<?php

 class Math
 {
	 public $a;
	 public $b;
	
	 
	 public function __construct($first, $second){
		 $this->a = $first;
		 $this->b = $second;
		 $this->display();
	 }
	 public function sum(){
		 return $this->a + $this->b;
	 }
	 public function mul($c){
		 return $this->a * $this->b * $c;
	 }
	 public function display(){
		 echo "Welcome Boss <br>";
	 }
 }
 
 $foo = new Math(10,20);
 echo $foo->sum();
 echo "<br>";
 $foo = new Math(5,7);
 echo $foo->sum();
 echo "<br>";
 echo $foo->mul(3);
 echo "<br>";
 

?>
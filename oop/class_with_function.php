<?php
  
  class Math{
	  public $a = 10;
	  public $b = 15;
	  
	  public function sum(){
		  $c = $this->a + $this->b;
		  return $c;
	  }
	  
	  public function sum_result(){
		  $this->a = 15;
		  $result = $this->sum();
		  echo 'Sum is :' . $result;
	  }
  }
  
  $math = new Math();
  echo $math->sum();
  echo "<br/>";
  $math->sum_result();


?>
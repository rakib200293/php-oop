<?php

  function sum($a,$b=5){
	  $sum = $a + $b;
	  return $sum;
  }
  $ans = sum(12);
  echo "Answer is : $ans <br/>";
  echo 'Second answer is :'.sum(12,11);
  

?>
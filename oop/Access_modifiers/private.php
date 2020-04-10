<?php

class PrivateClass{
	
	private $result = 15;
	
	public function getResult(){
		return $this->result;
	}
}

$obj = new PrivateClass();
echo $obj->getResult();


?>
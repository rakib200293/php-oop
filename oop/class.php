<?php

class Student{
	
	public $id = 10;
	public $name = 'Sojib';

}

$student = new Student();

echo $student->name;
$student->name = 'Sakib';
echo "<br/>";
echo $student->name;

?>
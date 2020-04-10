<?php

$conn = new mysqli( 'localhost', 'root', '', 'laravel');

$sql = "SELECT * FROM studentS";

$result =  $conn->query($sql);

//echo $result->num_rows;

while($row = $result->fetch_assoc()){
	echo $row['id'] . ' Name : ' . $row['name'] . ' GPA : ' . $row['gpa'] .'<br/>';
	
}


?>
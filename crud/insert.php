<?php

$conn = new mysqli( 'localhost', 'root', '', 'laravel');

$sql = "INSERT INTO students VALUES(NULL, 'Araf', '200300', '12', '4.87', '2002-05-03', '5')";

if($conn->query($sql)){
	echo "Data inserted successfully";
}else{
	echo "Something went wrong";
}


?>
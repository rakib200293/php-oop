<?php

$conn = new mysqli('localhost', 'root', '', 'laravel');

$sql = "UPDATE students set name='Jahid', age = 20 WHERE id = 4";

if($conn->query($sql)){
	echo "Data updated successfully";
}else{
	echo "Something went wrong";
}

?>
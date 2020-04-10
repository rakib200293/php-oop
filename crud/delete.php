<?php

$conn = new mysqli('localhost', 'root', '', 'laravel');

$sql = "DELETE FROM students WHERE id = 4";

if($conn->query($sql)){
	echo "Data deleted successfully";
}else{
	echo "Something went wrong";
}

?>
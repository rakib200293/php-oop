<?php

 session_start();
 
 if(!isset($_SESSION['name'])){
	 header("location:main.php");
 }
 


?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

	
<p>My first paragraph.</p>

</body>
</html>
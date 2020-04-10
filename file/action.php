<?php

  echo $_FILES['file']['name'];
  echo "<br/>";
  echo $_FILES['file']['size'];
  echo "<br/>";
  
  $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
  
  $tmp = $_FILES['file']['tmp_name'];
  //$target = 'images/' . $_FILES['file']['name'];
  //$target = 'images/' .rand(1,9999999) . $_FILES['file']['name'];
  
  $target = 'images/' . rand(1,9999999). '.' . $extenton;
  
  move_uploaded_file($tmp, $target);

?>
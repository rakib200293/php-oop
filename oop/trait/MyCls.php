<?php
 require "Foo.php";
 require "Bar.php";
 require "ParentCls.php";

 class MyCls extends ParentCls{
	 
	 use Foo, Bar;
 }
 
 $obj = new MyCls();
 $obj->display();
 echo "<br>";
 $obj->ok();

?>
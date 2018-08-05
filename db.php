<?php
	$con=@mysql_connect("localhost","root","");
	if(!$con)
	{ die("Connection Faild : ".mysql_error()); }
	mysql_select_db('city');


/*	$con=mysqli_connect("localhost","root","","city");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }*/
?>
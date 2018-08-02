<?php
require_once("con.php");
 
	$query="delete from users1 where userid='".$_REQUEST['userid']."'";
	mysqli_query($con,$query);
	header('location:table1.php');

?>
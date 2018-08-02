<?php
require_once("con.php");
 
	$query="delete from users where userid='".$_REQUEST['userid']."'";
	mysqli_query($con,$query);
	header('location:table.php');

?>
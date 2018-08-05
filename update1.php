<?php
include 'db.php';
session_start();
$email=$_SESSION['email'];
$city=strtoupper($_POST['city']);
//echo $email;
$sql="update details set city='".$city."',hotel='".$_POST['hotel']."',place='".$_POST['place']."',food='".$_POST['food']."',shopping='".$_POST['shopping']."' where email='".$email."'";
$sql1="update user set ph='".$_POST['ph']."' where email='".$email."'";
mysql_query($sql);
mysql_query($sql1);
$r=mysql_affected_rows();
		/*if ($r>0) 
		{*/
			
			
			$success_message = "success";	
			unset($_POST);
			header("Location:update.php?msg=$success_message");
		//}
		/*else
		{
			$error_message = "failed";
			echo $error_message; 
		header("Location:update.php?msg=$error_message");
		}*/
?>
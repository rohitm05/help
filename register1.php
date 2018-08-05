<?php
include 'db.php';
if (isset($_POST['reg'])) 
{

$name=$_POST['name'];
$email=$_POST['email'];
$pass=sha1($_POST['password']);
$ph=$_POST['phone'];
$dob=$_POST['dob'];
$sq=$_POST['sq'];
$ans=$_POST['ans'];
$sql="insert into user (name,email,pass,ph,dob,sq,ans) values ('".$name."','".$email."','".$pass."','".$ph."','".$dob."','".$sq."','".$ans."')";
$sql1="insert into details (name,email) values ('".$name."','".$email."')";
//var_dump($sql1);
mysql_query($sql);
mysql_query($sql1);
$r=mysql_affected_rows();
		if ($r>0) 
		{
			
			$error_message = "";
			$success_message = "success1";	
			unset($_POST);
			header("Location:login.php?msg=$success_message");
		}
		else
		{

			$error_message = "failed";
			echo $error_message; 
		header("Location:register.php?msg=$error_message");
					}
		
	


}
?>
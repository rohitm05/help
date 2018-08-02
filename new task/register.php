<?php
session_start();
if(!empty($_POST["register-user"])) {
	require_once("con.php");
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	
/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$error_message = 'Passwords should be same<br>'; 
	}
	
	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
	if(!isset($_POST["username"])) {
	$error_message = " All Fields are required";
	}}
	if(!isset($error_message)) {
	if(!isset($_POST["name"])) {
	$error_message = " All Fields are required";
	}}
	if(!isset($error_message)) {
	if(!isset($_POST["dob"])) {
	$error_message = " All Fields are required";
	}
	}
	if(!isset($error_message)) {
	if(!isset($_POST["gender"])) {
	$error_message = " All Fields are required";
	}
	}
	if(!isset($error_message)) {
	if(!isset($_POST["web"])) {
	$error_message = " All Fields are required";
	}elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST["web"])) {
		$error_message = " Enter a proper web address";
	}
	
	}
	if(!isset($error_message)) {
	if(!isset($_POST["email"])) {
	$error_message = " All Fields are required";
	}elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$error_message = " Enter a proper email address";
	}
	}
	if(!isset($error_message)) {
	if(!isset($_POST["addr"])) {
	$error_message = " All Fields are required";
	}
	}
	if(!isset($error_message)) {
	if(!isset($_POST["ph"])) {
	$error_message = " All Fields are required";
	}
	}
	if(!isset($error_message)) {
	if(!isset($_POST["password"])) {
	$error_message = " All Fields are required";
	}
	}
	
	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
		$error_message = "Accept Terms and Conditions to Register";
		}
	}
	
	if(!isset($error_message)) {
		
		$query="INSERT INTO users (username, name, dob, gender, web, email,addr,ph,pass) VALUES('".$_POST['username']."','".$_POST['name']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['web']."','".$_POST['email']."','".$_POST['addr']."','".$_POST['ph']."','".sha1($_POST['password'])."')";
		
		mysqli_query($con,$query);
		$r=mysqli_affected_rows($con);
		if ($r>0) 
		{
			
			$error_message = "";
			$success_message = "You have registered successfully!";	
			unset($_POST);
			 $_SESSION['message'] = $success_message;
			header('Location: task1.php');
		}
		else
		{
			$error_message = "Problem in registration. Try Again!";
			$_SESSION['message1']=$error_message;
			header('Location: task1.php');
		}
		
	}
}
?>
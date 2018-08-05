<?php
include 'db.php';
session_start();
$email=$_SESSION['email'];
//echo sha1($_POST['password']);
@$sql="update user set pass='".sha1($_POST['password'])."' where email='".$email."'";
mysql_query($sql);
$r=mysql_affected_rows();
		if ($r>0) 
		{
			
			
			$success_message = "success";	
			unset($_POST);
			header("Location:login.php?msg=$success_message");
		}
		
?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style="background-image:Mpsg2b.jpg ">
<div class="login">
  <div class="login-header">
    <h4>Reset Password</h4>
  </div>
  <form  method="post">
  <div class="login-form">
    <h3>Enter your New Password</h3>
    <input type="password"  id="password" name="password" required><br>
    <h3>Renter your New Password:</h3>
    <input type="password" id="confirm_password" name="confirm_password" required>
    <span>Your passwords do not match</span>
    <br>
    <input type="submit" value="Change" class="login-button" name="login" >
    </form>
    <br>
  </div>
</div>
<script src='JQuery.js'></script>
    <script  src="js/index.js"></script>
</body>
</html>
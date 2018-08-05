<?php
include 'db.php';
session_start();
if(isset($_POST['forget'])){
$email=$_POST['email'];
$sq=$_POST['sq'];
$ans=$_POST['ans'];
$sql="select * from user where email='".$email."' and sq='".$sq."' and ans='".$ans."'";
$result=mysql_query($sql);
if ($arr=mysql_fetch_assoc($result) )
{
	$_SESSION['email']=$email;
	

	header('Location:forgot1.php');
}
else
		{
			$error_message = "This Email is not registered ";
			echo $error_message;
			
		}}
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
    <h4>Forgot Password</h4>
  </div>
  <form  method="post">
  <div class="login-form">
    <h3>Enter your Email id:</h3>
    <input type="text" placeholder="Email" name="email" required><br>
    <h3>Security Question:</h3>
    <select name="sq">
			         <option hidden>Select</option>
                     <option value="What is your favrouite Actor?">What is your favrouite Actor?</option>
                     <option value="What is your School Name?">What is your School Name?</option>
                     <option value="What is your favrouite Color?">What is your favrouite Color?</option>
                     <option value="What is your pet name?">What is your pet name?</option>
     </select>
    <br>
    <h3>Answer to the Question:</h3>
    <input type="text" placeholder="Answer" name="ans" required><br>
    <input type="submit" value="Submit" class="login-button" name="forget" >
    </form>
  </div>
</div>
</body>
</html>
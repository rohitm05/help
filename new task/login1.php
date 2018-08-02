<?php
if (isset($_POST['login-btn'])) {
	if ($_POST['username']=="admin" && $_POST['password']=="password") {
		$_SESSION['username']=$_POST['username'];
		header("Location:join1.php");
	}
	else{
		echo "Login Unsuccessful";
		header("Location:login.php");
	}
}
?>
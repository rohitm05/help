<?php
session_start();
	if(isset($_REQUEST["login"]))
	{
		include 'db.php';
		$email=mysql_real_escape_string($_REQUEST["email"]);
		$password=sha1(mysql_real_escape_string($_REQUEST["password"])); 
		echo $password;
		$sql="select * from user where email='".$email."' and pass='".$password."'";
		$result=mysql_query($sql);
		if ($arr=mysql_fetch_assoc($result) )
		
		{
			if ($arr["email"]==$email && $arr["pass"]==$password) 
			{
				echo "Login Success";
				$_SESSION["name"]=$arr["name"];
				$_SESSION["email"]=$arr["email"];

				header('Location:index1.php');

			}
		}
		
		else
		{ $error_message = "failed";
			echo $error_message; 
			header("Location:login.php?msg=$error_message"); 
		}
	}
?>
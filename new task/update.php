<?php
 session_start();
		require_once("con.php");
		$query="UPDATE  users  SET username='".$_POST['username']."', name='".$_POST['name']."', dob='".$_POST['dob']."', gender='".$_POST['gender']."', web='".$_POST['web']."', email='".$_POST['email']."',addr='".$_POST['addr']."',ph='".$_POST['ph']."' WHERE username='".$_POST['username']."'";
		
		$r=mysqli_query($con,$query);
		
		if ($r) 
		{
			
			$error_message = "";
			$success_message = "Your data updated successfully!";	
			unset($_POST);
			 $_SESSION['message'] = $success_message;
			header('Location: table.php');
		}
		else
		{
			$error_message = "Problem in updating. Try Again!";
			$_SESSION['message1']=$error_message;
			header('Location: table.php');
		}
?>


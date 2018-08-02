<?php
 session_start();
 $target_dir = "uploads/";
       $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
       $uploadOk = 1;
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      
       $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
       if($check !== false) {
           
           move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); 
       } else {
           echo "File is not an image.";
           $uploadOk = 0;
       }
       echo basename( $_FILES["fileToUpload"]["name"]);
       exit();
		require_once("con.php");
		$query="UPDATE  users1  SET username='".$_POST['username']."', name='".$_POST['name']."', dob='".$_POST['dob']."', gender='".$_POST['gender']."', web='".$_POST['web']."', email='".$_POST['email']."',addr='".$_POST['addr']."',ph='".$_POST['ph']."',image='".basename( $_FILES["fileToUpload"]["name"])."' WHERE username='".$_POST['username']."'";
		
		$r=mysqli_query($con,$query);
		
		if ($r) 
		{
			
			$error_message = "";
			$success_message = "Your data updated successfully!";	
			unset($_POST);
			 $_SESSION['message'] = $success_message;
			header('Location: table1.php');
		}
		else
		{
			$error_message = "Problem in updating. Try Again!";
			$_SESSION['message1']=$error_message;
			header('Location: table1.php');
		}
?>


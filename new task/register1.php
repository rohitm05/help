   <?php 
   require_once("con.php");

   /* Form Required Field Validation */
   foreach($_POST as $key=>$value) {
      if(empty($_POST[$key])) 
      {
      	 echo $error_message = "All Fields are required";
      	 
      }
   }
 

/* Password Matching Validation */
   if($_POST['password'] != $_POST['confirm_password'])
   { 
   		 echo $error_message = 'Passwords should be same'; 
   }
  
   /* Validation to check if gender is selected */
   if(!isset($error_message)) 
   {
	   if(!isset($_POST["username"])) 
	   {
	   	 echo $error_message = " All Fields are required";
	   }
	}

   if(!isset($error_message)) 
   {
	   if(!isset($_POST["name"])) 
	   {
	   		 echo $error_message = " All Fields are required";
	   }
   }
   if(!isset($error_message)) 
   {
	   if(!isset($_POST["dob"])) 
	   {
	   		echo $error_message = " All Fields are required";
	   }
   }
   if(!isset($error_message)) 
   {
	   if(!isset($_POST["gender"])) 
	   {
	   		 echo $error_message = " All Fields are required";
	   }
   }
   if(!isset($error_message)) 
   {
   if(!isset($_POST["url"])) 
   {
   		 echo $error_message = " All Fields are required";
   }
   elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST["url"])) 
   {
       echo $error_message = " Enter a proper web address";
   }
   
   }
   if(!isset($error_message)) 
   {
	   if(!isset($_POST["email"])) 
	   {
	   		 echo $error_message = " All Fields are required";
	   }
	   elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
	   {
	      	 echo $error_message = " Enter a proper email address";
	   }
   }
   if(!isset($error_message)) 
   {
	   if(!isset($_POST["addr"])) 
	   {
	   		 echo $error_message = " All Fields are required";
	   }
   }
   if(!isset($error_message)) 
   {
	   if(!isset($_POST["phone"])) 
	   {
	   		 echo $error_message = " All Fields are required";
	   }
   }
   if(!isset($error_message)) 
   {
	   if(!isset($_POST["password"]))
	   {
		  echo $error_message = " All Fields are required";
	   }
	   elseif (strlen($_POST["password"])< 7) 
	   {
	       echo $error_message = "Please provide a password greater than 7 characters";
	   
	   }
   }
   if(!isset($error_message)) 
   {
        $target_dir = "uploads/";
       $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
       $uploadOk = 1;
       $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      
       $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
       if($check !== false) {
           
           move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file); 
       } else {
           $error_message="File is not an image.";
           $uploadOk = 0;
       }
     
   }
  
   
   /* Validation to check if Terms and Conditions are accepted */
   if(!isset($error_message)) {
      if(!isset($_POST["accept"])) {
       echo $error_message = "Accept Terms and Conditions to Register";
      }
   }
   
   if(!isset($error_message)) {
      
      $query="INSERT INTO users1 (username, name, dob, gender, web, email,addr,ph,pass,image) VALUES('".$_POST['username']."','".$_POST['name']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['url']."','".$_POST['email']."','".$_POST['addr']."','".$_POST['phone']."','".sha1($_POST['password'])."','".basename( $_FILES["fileToUpload"]["name"])."')";
      
      mysqli_query($con,$query);
      $r=mysqli_affected_rows($con);
      if ($r>0) 
      {
         unset($_POST);
         $error_message = "";
         echo $success_message = "You have registered successfully!";  

         
         
         
      }
      else
      {
      	
         echo $error_message = "Problem in registration. Try Again!";
         
      }
    
	}else{
        echo $error_message;
    }


	//return $error_message;
?>
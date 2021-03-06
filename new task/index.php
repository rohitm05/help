   <?php
   require_once("code.php");
   ?>
   <!DOCTYPE html>
   <html>
   <head>
   	<title>Form</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   	<link rel="stylesheet" type="text/css" href="css/style.css">
   	<script src="myscript.js"></script>
   </head>
   <body >
   
      <div class="container">	
         <h1 class="header">Register Page</h1>
         <form  name="frmRegistration" method="post"  enctype="multipart/form-data" action="" onsubmit="validate()">
            <table border="0" width="500" align="center" class="demo-table" style="margin-left: 300px;" >

               <tr>
                  <td class="td1">User name</td>
                  <td>
                     <input type="text" class="demoInputBox" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" >
                  </td>
               </tr>
               <tr>
               <td class="td1">Name</td>
                  <td>
                     <input type="text" class="demoInputBox" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
                  </td>
                  </tr>
               <tr>
               <td class="td1">Date Of Birth</td>
                  <td>
                     <input type="Date" class="demoInputBox" name="dob" value="<?php if(isset($_POST['dob'])) echo $_POST['dob']; ?>">
                  </td>
               </tr>
               <tr>
                  <td class="td1">Gender</td>
                  <td>
                     <input type="radio" name="gender" <?php if (isset($_POST['gender']) && $_POST['gender']=="male") echo "checked";?> value="male">Male
                     <input type="radio" name="gender" <?php if (isset($_POST['gender']) && $_POST['gender']=="female") echo "checked";?> value="female">Female
                 <input type="radio" name="gender" <?php if (isset($_POST['gender']) && $_POST['gender']=="others") echo "checked";?> value="others">Others  
                 </td>
               </tr>
               <tr>
                  <td class="td1">Website</td>
                  <td>
                     <input type="text" class="demoInputBox" name="web" value="<?php if(isset($_POST['web'])) echo $_POST['web']; ?>">
                  </td>
               </tr>
               <tr>
                  <td class="td1">Address</td>
                  <td>
                     <input type="text" class="demoInputBox" name="addr" value="<?php if(isset($_POST['addr'])) echo $_POST['addr']; ?>">
                  </td>
               </tr>
               <tr>
                  <td class="td1">Email</td>
                  <td>
                     <input type="Email" class="demoInputBox" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                  </td>
               </tr>
               <tr>
                  <td class="td1">Phone Number</td>
                  <td>
                     <input type="text" class="demoInputBox" name="ph" value="<?php if(isset($_POST['ph'])) echo $_POST['ph']; ?>">
                  </td>
               </tr>
               <tr>
                  <td class="td1">Password</td>
                  <td>
                     <input type="password" class="demoInputBox" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>">
                  </td>
               </tr>
               <tr>
               <td class="td1">Confirm Password</td>
               <td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
               </tr>
               <tr>
                  <td class="td1">Image :</td>
                  <td>
                     <input type="file" class="demoInputBox" name="fileToUpload" id="fileToUpload" value="">
                  </td>
               </tr>
               <tr>
                  <td colspan=2 class="td1">
                     <input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user"  value="Register" class="btnRegister">
                  </td>
               </tr>
            </table>
         </form>
   </div>
   <?php if(!empty($success_message)) { ?>   
      <div class="success-message"><?php if(isset($success_message)) {echo $success_message; unset($success_message); }?></div>
      <?php } ?>
      <?php if(!empty($error_message)) { ?>  
      <div class="error-message"><?php if(isset($error_message)) {echo $error_message; unset($error_message);} ?></div>
      <?php } ?>
   </body>




   </html>

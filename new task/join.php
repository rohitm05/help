<?php
session_start();
if (isset($_SESSION['username'])) {
   require_once("ins.php");
   ?>
   <!DOCTYPE html>
   <html>
   <head>
   	<title>Course Form</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   	<link rel="stylesheet" type="text/css" href="css/style.css">
   	<script src="myscript.js"></script>
   </head>
   <body >
   
   <div class="container">
   <a href="logout.php" class="pull-right logout">LOGOUT</a>	
   <h1 class="header">Add Student Details</h1>
   <form  name="frmRegistration" method="post"   action="">
   <table border="0" width="500" align="center" class="demo-table" style="margin-left: 300px;" >

   <tr>
   <td class="td1">Registration Number</td>
   <td><input type="text" class="demoInputBox" name="reg_no" value="<?php if(isset($_POST['reg_no'])) echo $_POST['reg_no']; ?>" ></td>
   </tr>
   <tr>
   <td class="td1">Name</td>
   <td><input type="text" class="demoInputBox" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"></td>
   </tr>
   <tr>
   <td class="td1">Address</td>
   <td><input type="text" class="demoInputBox" name="addr" value="<?php if(isset($_POST['addr'])) echo $_POST['addr']; ?>"></td>
   </tr>
   <tr>
   <td class="td1">Phone Number</td>
   <td><input type="text" class="demoInputBox" name="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>"></td>
   </tr>
   <tr>
   <td class="td1">Age</td>
   <td><input type="text" class="demoInputBox" name="age" value="<?php if(isset($_POST['age'])) echo $_POST['age']; ?>"></td>
   </tr>
   <tr>
   <td class="td1">Course Id</td>
   <td><input type="text" class="demoInputBox" name="course_id" value="<?php if(isset($_POST['course_id'])) echo $_POST['course_id']; ?>"></td>
   </tr>
   <tr>
   <td class="td1">Course Name</td>
   <td><input type="text" class="demoInputBox" name="course_name" value="<?php if(isset($_POST['course_name'])) echo $_POST['course_name']; ?>"></td>
   </tr>
   <tr>
   <td class="td1">
   <input type="submit" name="register-user"  value="Register" class="btnRegister"></td>
   </tr>
   </table>
   </form>
</div>
   </body>
   </html>
   <?php
}
else{
   header("Location:login.php");
}
?>

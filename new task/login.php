<?php
session_start();
   if(isset($_SESSION['username']))
    header("Location:join1.php");
    include('login1.php');
   ?>
   <!DOCTYPE html>
   <html>
   <head>
   	<title>Login Form</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   	<link rel="stylesheet" type="text/css" href="css/style.css">
   	<script src="myscript.js"></script>
   </head>
   <body >

    <div class="full">
      <div class="container">	
              <h1 class="header1">Login Page</h1>
              <form  name="frmRegistration" method="post"   action="">
                      <table border="0" width="500" align="center" class="demo-table" style="margin-left: 300px;" >
                      <tr class="log"><td >Username</td></tr>
                      <tr class="log1"><td ><input type="text" name="username" class="form-control inp"></td></tr>
                      <tr class="log"><td >Password</td></tr>
                      <tr class="log1"><td ><input type="password" name="password" class="form-control inp"></td></tr>
                      <tr class="log1"><td ><input type="submit" name="login-btn" class="btn btn-success bt" value="LOGIN"></td></tr>
                      </table>
              </form>
      </div>
    </div>
   </body>
   </html>

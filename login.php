<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='JQuery.css'>

      <link rel="stylesheet" href="style1.css">
<script  src="index1.js"></script>
  
</head>

<body>
<a href="index.php" align="left"><img src="home.ico" style="height: 40px; width: 40px;"></a>
<?php if(isset($_GET['msg'])){
   if($_GET['msg']=="success") { ?> 
<div class="success-message"><?php echo "Password changed successfully!"; ?></div>
<?php } ?>
<?php if($_GET['msg']=="success1") { ?> 
<div class="success-message"><?php echo "You have registered successfully!!"; ?></div>
<?php } ?>
<?php if($_GET['msg']=="failed") { ?> 
<div class="error-message"><?php echo "Problem in login. Check Password and email ...Try Again!"; ?></div>
<?php } }?>
  <link href='u.css' rel='stylesheet' type='text/css'>

<div class="login">
  <div class="login-header">
    <h1>Login</h1>
  </div>
  <form action="login1.php" method="post">
  <div class="login-form">
    <h3>Enter your Email id:</h3>
    <input type="text" placeholder="Email" name="email" required><br>
    <h3>Enter your Password:</h3>
    <input type="password" placeholder="Password" name="password" required>
    <br>
    <input type="submit" value="Login" class="login-button" name="login" >
    </form>
    <br>
    <a class="sign-up" href="register.php">Sign Up!</a>
    <br>
    <a href="forgot.php"><h6 >Can't access your account?</h6></a>
  </div>
</div>

  <script src='JQuery.js'></script>
<script src='JQuery1.js'></script>

  

    



</body>

</html>

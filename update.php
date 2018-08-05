<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body >
<a href="index1.php"><img src="back.jpg" style="height: 30px; width: 30px; float: left; "></a>
<h4 align="right">Welcome , <?php session_start(); echo $_SESSION['name']; ?> |<a href="logout.php">Logout</a></h4>
	<?php if(isset($_GET['msg'])){
   if($_GET['msg']=="success") { ?> 
<div class="success-message"><?php echo "Details updated successfully!"; ?></div>
<?php }  ?>
<?php if($_GET['msg']=="success1") { ?> 
<div class="success-message"><?php echo "Your Password has been successfully updated!"; ?></div>
<?php } 
if($_GET['msg']=="failed") { ?>	
<div class="error-message"><?php echo "Problem in updating details. Try Again!"; ?></div>
<?php } }?>


<h3>Update Profile</h3>

<form action="update1.php" method="post">
<?php

include 'db.php';
$email=$_SESSION['email'];

//$sql="select * from user where email='".$email."'";
//$sql1="select * from detail where email='".$email."'";
$sql="SELECT t1.name,t1.email,t1.dob,t2.city,t2.food,t2.hotel,t2.place,t2.shopping,t1.ph FROM user t1 JOIN details t2 ON t2.email = t1.email WHERE t1.email = '".$email."'";

$result=mysql_query($sql);
//$result1=mysql_query($sql1);
if ($arr=mysql_fetch_array($result) )
{
?>
	<label>Name:</label>
	<input type="text" value="<?php echo $arr['name']; ?>" readonly></input><br>
	<label>Email:</label>
	<input type="text" value="<?php echo $arr['email']; ?>" readonly></input><br>
	<label>Date of Birth:</label>
	<input type="text" value="<?php echo $arr['dob']; ?>" readonly></input><br>
	<label>Phone:</label>
	<input type="text" name="ph" value="<?php echo $arr['ph']; ?>" ></input><br>
	<label>City:</label>
	<input type="text" name="city" value="<?php echo $arr['city']; ?>"></input><br>
	<label>Food:</label>
	<input type="text" name="food" value="<?php echo $arr['food']; ?>"></input><br>
	<label>Hotel:</label>
	<input type="text" name="hotel" value="<?php echo $arr['hotel']; ?>"></input><br>
	<label>Place of Interest:</label>
	<input type="text" name="place" value="<?php echo $arr['place']; ?>"></input><br>
	<label>Shopping:</label>
	<input type="text" name="shopping" value="<?php echo $arr['shopping']; ?>"></input><br>
	<input type="submit" value="Update" class="login-button" name="update" >
	<input type="button" value="Change Password" onclick="window.location.href='change.php'" id="c">
   <?php } ?>

</form>

</body>
</html>
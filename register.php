<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
   	
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<form action="register1.php" method="post" >
  <h2>Sign Up</h2>
  <?php if(isset($_GET['msg'])){
   
 if($_GET['msg']=="failed") { ?>	
<div class="error-message"><?php echo "Problem in registration. Try Again!"; ?></div>
<?php } }?>

        <p>
			<label for="name" class="floatLabel">Hi, What is your Name?</label>
			<input id="name" name="name" type="text"  value="" required>
		</p>
		<p>
			<label for="email" class="floatLabel">Enter your email</label>
			<input id="email" name="email" type="text" value="" required>
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password" type="password" required>
			<span>Enter a password longer than 7 characters</span>
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" name="confirm_password" type="password" required>
			<span>Your passwords do not match</span>
		</p>
		<p>
			<label for="phone" class="floatLabel">What is your Phone Number?</label>
			<input id="phone" name="phone" type="text" required>
		</p>
		
		<p>
			<label for="dob" class="floatLabel" id="d">Date of Birth</label>
			<input id="dob" name="dob" type="date" value="" required>
		</p>
		<p>
			<label for="sq" class="floatLabel">Security Question</label>
			<select name="sq">
			         <option hidden>Select</option>
                     <option value="What is your favrouite Actor?">What is your favrouite Actor?</option>
                     <option value="What is your School Name?">What is your School Name?</option>
                     <option value="What is your favrouite Color?">What is your favrouite Color?</option>
                     <option value="What is your pet name?">What is your pet name?</option>
            </select>
		</p>
		<p>
			<label for="ans" class="floatLabel">Answer to the Question</label>
			<input id="ans" name="ans" type="text" value="" placeholder="make sure you don't forget it" required>
		</p>
		<p>
			<input type="submit" value="Create My Account" id="submit" name="reg" >
		</p>
		<p>
			<input type="reset" value="Reset" id="reset">
		</p>

	</form>
 

<script src='JQuery.js'></script>
    <script  src="js/index.js"></script>


</body>

</html>

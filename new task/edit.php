<?php
require_once("con.php");
$query="select * from users where userid='".$_REQUEST['userid']."'";
$r=mysqli_query($con,$query);
$arr=mysqli_fetch_assoc($r);
?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
   <div class="container">
    <h4 id="head">Update Details</h4>
    <div  border="2"> 
<form  name="frm-update" method="post"  action="update.php"  >
   <table   class="demo-table"  >

   <tr>
   <td class="td1">User name</td>
   <td>
   		<input type="text" class="demoInputBox" value="<?php echo($arr['username']) ?>" disabled>
   		<input type="hidden" class="demoInputBox" name="username" value="<?php echo($arr['username']) ?>">
   </td>
   </tr>
   <tr>
   <td class="td1">Name</td>
   <td>
   		<input type="text" class="demoInputBox" value="<?php echo($arr['name']) ?>" disabled>
   		<input type="hidden" class="demoInputBox" name="name" value="<?php echo($arr['name']) ?>">
   </td>
   </tr>
   <tr>
   <td class="td1">Date Of Birth</td>
   <td><input type="Date" class="demoInputBox" name="dob" value="<?php echo($arr['dob'])?>"></td>
   </tr>
   <tr>
   <td class="td1">Gender</td>
   <td><input type="radio" name="gender" <?php if ($arr['gender']=="male") echo "checked";?> value="male">Male
    <input type="radio" name="gender" <?php if ($arr['gender']=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if ( $arr['gender']=="others") echo "checked";?> value="others">Others  </td>
   </tr>
   <tr>
   <td class="td1">Website</td>
   <td><input type="text" class="demoInputBox" name="web" value="<?php echo($arr['web'])?>"></td>
   </tr>
   <tr>
   <td class="td1">Address</td>
   <td><input type="text" class="demoInputBox" name="addr" value="<?php echo($arr['addr'])?>"></td>
   </tr>
   <tr>
   <td class="td1">Email</td>
   <td><input type="Email" class="demoInputBox" name="email" value="<?php echo($arr['email'])?>"></td>
   </tr>
   <tr>
   <td class="td1">Phone Number</td>
   <td><input type="text" class="demoInputBox" name="ph" value="<?php echo($arr['ph'])?>"></td>
   </tr>
   <tr>
   <td colspan=2 class="td1">
   <input type="submit" name="register-user"  value="Update" class="btnRegister" ></td>
   </tr>
   </table>
   </form>
</div>
</div>
</body>
</html>


<?php
 session_start();
require_once("con.php");
$query="select username,userid from users";
$r=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Users</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>
<body>
	

<div class="container">
<table class="table table-striped tab" border="4" align="center" >
	<tr>
		<th class="tab">Users</th>
		<th class="tab">Edit</th>
		<th class="tab">Delete</th>
	</tr>
	<?php while ($arr=mysqli_fetch_array($r,MYSQLI_BOTH)): ?>
		<tr>
			<td class="tab"><input class="form-control" type="text" name="username" value="<?php echo $arr['username'];?>" disabled style="text-align: center; width: 50%; margin-right: 0px;"></input></td>
			<td class="tab"><a href="edit.php?userid=<?php echo $arr['userid'];?>"><i class="fas fa-user-edit i"></i></a></td>
			<td class="tab"><a href="manage.php?userid=<?php echo $arr['userid'];?>"><i class="fas fa-trash-alt i"></i></a></td>
		</tr>	
		<?php endwhile; ?>
</table>
<?php if(!empty($_SESSION['message'])) { ?>	
   <div class="success-message"><?php if(isset($_SESSION['message'])) {echo $_SESSION['message']; session_destroy(); }?></div>
   <?php } ?>
   <?php if(!empty($_SESSION['message1'])) { ?>	
   <div class="error-message"><?php if(isset($_SESSION['message1'])) {echo $_SESSION['message1']; session_destroy();} ?></div>
   <?php } ?>
</body>
</html>

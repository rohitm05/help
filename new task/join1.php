<?php
session_start();
if (isset($_SESSION['username'])) {
require_once("con.php");
$query="SELECT * FROM student_details JOIN course ON student_details.reg_no = course.reg_no;";
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
	<a href="join.php" class="pull-left anc">ADD STUDENT</a>
	<a href="logout.php" class="pull-right logout">LOGOUT</a>
<table class="table table-striped tab" border="4" align="center" >
	<tr>
		<th class="tab">Registration Number</th>
		<th class="tab">Name</th>
    <th class="tab">Age</th>
        <th class="tab">Address</th>
        <th class="tab">Phone</th>
        <th class="tab">Course Name</th>
        <th class="tab">Course Id</th>
	</tr>
	<?php while ($arr=mysqli_fetch_array($r,MYSQLI_BOTH)): ?>
		<tr>
			<td class="tab"><?php echo $arr['reg_no'];?></td>
			<td class="tab"><?php echo $arr['name'];?> </td>
      <td class="tab"><?php echo $arr['age'];?></td>
      <td class="tab"><?php echo $arr['addr'];?></td>
      <td class="tab"><?php echo $arr['phone'];?></td>
      <td class="tab"><?php echo $arr['course_name'];?></td>
      <td class="tab"><?php echo $arr['course_id'];?></td>
		</tr>	
		<?php endwhile; ?>
</table>
<br>
<?php
$query="SELECT course.course_id, student_details.name, student_details.age FROM student_details INNER JOIN course ON student_details.reg_no = course.reg_no;";
$r=mysqli_query($con,$query);
?>
<table class="table table-striped tab" border="4" align="center" >
	<tr>
		<th class="tab">Name</th>
        <th class="tab">Age</th>
        <th class="tab">Course Id</th>
	</tr>
	<?php while ($arr=mysqli_fetch_array($r,MYSQLI_BOTH)): ?>
		<tr>
			<td class="tab"><?php echo $arr['name'];?> </td>
            <td class="tab"><?php echo $arr['age'];?></td>
            <td class="tab"><?php echo $arr['course_id'];?></td>
		</tr>	
		<?php endwhile; ?>
</table>
<br>
<?php
$query="SELECT student_details.name,course.course_id FROM student_details LEFT JOIN course ON course.reg_no = student_details.reg_no;";
$r=mysqli_query($con,$query);
?>
<table class="table table-striped tab" border="4" align="center" >
	<tr>
		<th class="tab">Name</th>
    <th class="tab">Course Id</th>
	</tr>
	<?php while ($arr=mysqli_fetch_array($r,MYSQLI_BOTH)): ?>
		<tr>
			<td class="tab"><?php echo $arr['name'];?> </td>
      <td class="tab"><?php echo $arr['course_id'];?></td>
		</tr>	
		<?php endwhile; ?>
    <br>
<?php
$query="SELECT student_details.name,course.course_id FROM student_details RIGHT JOIN course ON course.reg_no = student_details.reg_no;";
$r=mysqli_query($con,$query);
?>
<table class="table table-striped tab" border="4" align="center" >
	<tr>
		<th class="tab">Name</th>
    <th class="tab">Course Id</th>
	</tr>
	<?php while ($arr=mysqli_fetch_array($r,MYSQLI_BOTH)): ?>
		<tr>
			<td class="tab"><?php echo $arr['name'];?> </td>
      <td class="tab"><?php echo $arr['course_id'];?></td>
		</tr>	
		<?php endwhile; ?>
 

</body>
</html>
<?php
}
else{
	header("Location:login.php");
}
?>
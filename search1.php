<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include 'db.php';
	session_start();
	
	@$city=$_SESSION["city"];
	unset($_SESSION["city"]);

?>

<table border="3"  align="center" style="height: 100px; background:url('a.jpg'); border-color: black; ">
<tr>
		<th>Name</th>
		<th>City</th>
		<th>Food</th>
		<th>Hotel</th>
		<th>Place of Interest</th>
		<th>Shopping Place</th>

	</tr>
	<?php 
          
          $c=mysql_query("select * from details where city='".$city."'");
          
         while($arr=mysql_fetch_array($c))
          {
          	
	?>
	
	<tr>
	<td><?php echo $arr["name"]?></td>
	<td><?php echo $arr["city"]; ?></td>
	<td><?php echo $arr["food"]?></td>
	<td><?php echo $arr["hotel"]?></td>
	<td><?php echo $arr["place"]?></td><
	<td><?php echo $arr["shopping"]?></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>







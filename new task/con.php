<?php
$con = mysqli_connect("localhost","root","ln","user");
if (!$con) {
	die("Connection failed: ".mysqli_connect_errno());
}
?>
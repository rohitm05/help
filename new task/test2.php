<?php


$time="";
$date="";
if(isset($_POST['time'])){$time=$_POST['time']}
if(isset($_POST['date'])){$time=$_POST['date']}

echo $time."<br>";
echo $date;
?>
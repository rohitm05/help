<?php
require_once("con.php");
if(isset($_POST['register-user']))
{
    $query="insert into student_details(reg_no,name,age,addr,phone) values('".$_POST['reg_no']."','".$_POST['name']."','".$_POST['age']."','".$_POST['addr']."','".$_POST['phone']."')";
    $query1="insert into course(reg_no,course_id,course_name) values('".$_POST['reg_no']."','".$_POST['course_id']."','".$_POST['course_name']."')";
    mysqli_query($con,$query);
    mysqli_query($con,$query1);
    $r=mysqli_affected_rows($con);
    $r1=mysqli_affected_rows($con);
    if($r>0 && $r1>0)
    {
        echo "Data submitted successfully";
    }
    else
    {
        echo "Data submition unsuccessful";
    }
}
?>
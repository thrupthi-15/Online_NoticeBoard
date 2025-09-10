<?php
include 'connection.php';
$id=$_GET['del'];
$query="delete from student where id='$id' ";
$result=mysqli_query($con,$query);
if(!$result)
{
	die(mysqli_error($con));
}
else
{
	
	echo "<script>window.alert('Student Deleted Successfully');window.location='admin_student_reg.php';</script>";
}
?>
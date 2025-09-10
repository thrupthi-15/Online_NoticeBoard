<?php
include 'connection.php';
$id=$_GET['del'];
$query="delete from course where id='$id' ";
$result=mysqli_query($con,$query);
if(!$result)
{
	die(mysqli_error($con));
}
else
{
	
	echo "<script>window.alert('Course Deleted Successfully');window.location='admin_course.php';</script>";
}
?>
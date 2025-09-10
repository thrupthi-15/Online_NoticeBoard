<?php
include 'connection.php';
$id=$_GET['del'];
$query="delete from exam_fees where id='$id' ";
$result=mysqli_query($con,$query);
if(!$result)
{
	die(mysqli_error($con));
}
else
{
	
	echo "<script>window.alert('Exam Notification Deleted Successfully');window.location='admin_manage_notification.php';</script>";
}
?>
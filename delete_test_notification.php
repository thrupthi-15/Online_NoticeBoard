<?php
include 'connection.php';
$id=$_GET['del'];
$query="delete from mock_test where id='$id' ";
$result=mysqli_query($con,$query);
if(!$result)
{
	die(mysqli_error($con));
}
else
{
	
	echo "<script>window.alert('Lecturere Posted Test / Exam Notification Deleted from Notice board Successfully');window.location='admin_manage_notification.php';</script>";
}
?>
<?php
include 'connection.php';
$id=$_GET['del'];
$query="delete from college_event where id='$id' ";
$result=mysqli_query($con,$query);
if(!$result)
{
	die(mysqli_error($con));
}
else
{
	
	echo "<script>window.alert('College Event Notification Deleted Successfully');window.location='admin_manage_notification.php';</script>";
}
?>
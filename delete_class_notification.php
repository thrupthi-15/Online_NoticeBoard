<?php
include 'connection.php';
$id=$_GET['del'];
$query="delete from online_class where id='$id' ";
$result=mysqli_query($con,$query);
if(!$result)
{
	die(mysqli_error($con));
}
else
{
	
	echo "<script>window.alert('Lecturere Posted Online classNotification Deleted from Notice board Successfully');window.location='admin_manage_notification.php';</script>";
}
?>
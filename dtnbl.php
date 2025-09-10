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
	
	echo "<script>window.alert('Posted Online classNotification Deleted from Notice board Successfully');window.location='lecturer_manage_noti.php';</script>";
}
?>
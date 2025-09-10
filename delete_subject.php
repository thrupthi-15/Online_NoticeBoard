<?php
include 'connection.php';
$id=$_GET['del'];
$query="delete from subject where id='$id' ";
$result=mysqli_query($con,$query);
if(!$result)
{
	die(mysqli_error($con));
}
else
{
	
	echo "<script>window.alert('Subject Deleted Successfully');window.location='admin_subjects.php';</script>";
}
?>
<?php

include 'connection.php';

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$course=$_POST['course'];
$semester=$_POST['semester'];

	

$query="update student set name='$name',email='$email' ,phone='$phone' ,course='$course',semester='$semester' where id='$id'";

$result=mysqli_query($con,$query);

if($result)
{
	echo "<script>window.alert('Profile updated successfully.....!.');  window.location ='student_view_profile.php';</script>";
}
else
{
	die(mysqli_error($con));
}


?>
<?php

include 'connection.php';

$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

	

$query="update lecturers set name='$name',email='$email',phone='$phone' where id='".$id."'";

$result=mysqli_query($con,$query);

if($result)
{
	echo "<script>window.alert('Profile updated successfully.....!.');  window.location ='lecturer_Profile.php';</script>";
}
else
{
	die(mysqli_error($con));
}


?>
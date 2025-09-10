<?php
include 'connection.php';

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$course=$_POST['course'];
$semester=$_POST['semester'];
$username=$_POST['username'];
$password=$_POST['password'];
$role="Student";

$query="insert into student(name,email,phone,course,semester,username,password)values('".$name."','".$email."','".$phone."','".$course."','".$semester."','".$username."','".$password."')";
$result=mysqli_query($con,$query);


if($result)
 {
 echo "<script>window.alert('Student Registration sent to Admin successfullly'); window.location ='Index.php';  </script>";
}
 else
 {
 die(mysqli_error($con));
 }
 ?>

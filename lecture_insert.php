<?php
include 'connection.php';

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];

$course=$_POST['course'];
$subject=$_POST['subject'];


$role='Lecturer';


$query="insert into lecturers(name,email,phone,username,password,course,subject)values('".$name."','".$email."','".$phone."','".$username."','".$password."','".$course."','".$subject."')";
$result=mysqli_query($con,$query);

$query1="insert into login(username,password,role) values('".$username."','".$password."','".$role."')";
$result1=mysqli_query($con,$query1);


if($result)
 {
 echo "<script>window.alert('Lecturer added Successfully'); window.location ='admin_add_lecturer.php';  </script>";
}
 else
 {
 die(mysqli_error($con));
 }
 ?>

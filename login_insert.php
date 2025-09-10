<?php
include 'connection.php';

$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];

$query="insert into login(username,password,role)values('".$username."','".$password."','".$role."')";
$result=mysqli_query($con,$query);

if($result)
 {
 echo "<script>window.alert(' U HAVE SUCCESSFULLY INSERTED');  window.location ='index.html'; </script>";
}
 else
 {
 die(mysqli_error($con));
 }
 ?>

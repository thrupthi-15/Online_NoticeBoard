<?php
include 'connection.php';

$course=$_POST['course'];
$query="insert into course(course)values('".$course."')";
$result=mysqli_query($con,$query);

if($result)
 {
 echo "<script>window.alert('Course added Successfully'); window.location ='admin_course.php';  </script>";
}
 else
 {
 die(mysqli_error($con));
 }
 ?>

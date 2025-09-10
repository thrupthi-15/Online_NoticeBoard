<?php
include 'connection.php';
$subject=$_POST['subject'];

$query="insert into subject(subject)values('".$subject."')";
$result=mysqli_query($con,$query);

if($result)
 {
 echo "<script>window.alert(' Subject  added Successfully'); window.location ='admin_subjects.php';  </script>";
}
 else
 {
 die(mysqli_error($con));
 }
 ?>

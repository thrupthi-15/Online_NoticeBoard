<?php
include 'connection.php';

$course=$_POST['course'];
$semester=$_POST['semester'];

$description=$_POST['description'];
$examfees=$_POST['examfees'];
$last_date=$_POST['last_date'];


$file='upload/';
$image=$_FILES["image"]["name"];
$target_file1 = $file.basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file1);


$query="insert into exam_fees(course,semester,description,examfees,last_date,circular) values('".$course."','".$semester."','".$description."','".$examfees."','".$last_date."','".$image."')";
$result=mysqli_query($con,$query);

if($result)
 {
 echo "<script>window.alert('Exam Notice Posted Successfully.'); window.location ='admin_post_notification.php';  </script>";
}
 else
 {
 die(mysqli_error($con));
 }
 ?>

<?php
include 'connection.php';

$course=$_POST['course'];
$subject=$_POST['subject'];

$semester=$_POST['semester'];
$platform=$_POST['platform'];
$date=$_POST['date'];
$st_time=$_POST['st_time'];
$en_time=$_POST['en_time'];
$lec_id=$_POST['lec_id'];






$query="insert into online_class(lect_id,course,semester,subject,platform,date,start,end) values('".$lec_id."','".$course."','".$semester."','".$subject."','".$platform."','".$date."','".$st_time."','".$en_time."')";
$result=mysqli_query($con,$query);

if($result)
 {
 echo "<script>window.alert('Online Class Notification Posted in Online Notice Board Successfully.'); window.location ='lecturer_Post_noti.php';  </script>";
}
 else
 {
 die(mysqli_error($con));
 }
 ?>

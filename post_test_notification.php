<?php
include 'connection.php';

$course=$_POST['course'];
$subject=$_POST['subject'];

$semester=$_POST['semester'];
$test=$_POST['test'];
$tot_marks=$_POST['tot_marks'];
$time=$_POST['time'];
$last_date=$_POST['last_date'];
$lec_id=$_POST['lec_id'];







$query="insert into mock_test(lect_id,course,semester,subject,test,total_marks,time,date) values('".$lec_id."','".$course."','".$semester."','".$subject."','".$test."','".$tot_marks."','".$time."','".$last_date."')";
$result=mysqli_query($con,$query);

if($result)
 {
 echo "<script>window.alert('Test/Exam Notification Posted in Online Notice Board Successfully.'); window.location ='lecturer_Post_noti.php';  </script>";
}
 else
 {
 die(mysqli_error($con));
 }
 ?>

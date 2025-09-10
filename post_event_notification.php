<?php
include 'connection.php';

$event_name=$_POST['event_name'];
$description=$_POST['description'];

$location=$_POST['location'];
$last_date=$_POST['last_date'];


$file='upload/';
$image=$_FILES["image"]["name"];
$target_file1 = $file.basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file1);


$query="insert into college_event(event_name,description,location,last_date,event_pic) values('".$event_name."','".$description."','".$location."','".$last_date."','".$image."')";
$result=mysqli_query($con,$query);

if($result)
 {
 echo "<script>window.alert('Event Posted in Online Notice Board Successfully.'); window.location ='admin_post_notification.php';  </script>";
}
 else
 {
 die(mysqli_error($con));
 }
 ?>

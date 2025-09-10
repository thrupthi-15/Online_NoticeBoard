<?php

include 'connection.php';
$id=$_GET['acc'];
	$sql="select * from student where id='".$id."'";
	$re=mysqli_query($con,$sql);
	while($m=mysqli_fetch_assoc($re))
	{	 
		$u_id=$m['id'];
		$username=$m['username'];
		$password=$m['password'];
		$role="Student";
	}	
	

$query="update student set status='Success' where id='".$id."' and username='".$username."'";

$result=mysqli_query($con,$query);

$query1="insert into login(username,password,role)values('".$username."','".$password."','".$role."')";
$result1=mysqli_query($con,$query1);



if($result1)
{
	echo "<script>window.alert('Student Verified');  window.location ='admin_student_reg.php';</script>";
}
else
{
	die(mysqli_error($con));
}


?>

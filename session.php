<?php
    require_once('connection.php');
    session_start();
	
	$user_check = $_SESSION['username'];
	$type=$_SESSION['type'];
	
	$pass=$_SESSION['password'];
	
	$sessql=mysqli_query($con,"select * from login where username = '".$user_check."' and password = '".$pass."' and role = '".$type."'");

	$row=mysqli_fetch_array($sessql,MYSQLI_ASSOC);
	$login_session=$row['username'];
	$type=$row['role'];
	$paswd=$row['password'];
	
	
	
	if(!isset($_SESSION['username']))
	{
		header ("location:index.php");
	}
?>

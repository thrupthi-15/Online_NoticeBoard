<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$username1=$_POST['username'];
		$password1=$_POST['password'];
		$type=$_POST['role'];
		require_once('connection.php');
		session_start();
		$error='';
if($type=='Admin'){
		$sql = "select * from login where username = '".$username1."' and password = '".$password1."' and role = '".$type."'";
		
		$res = mysqli_query($con,$sql);

		if(!$res) {
			die(mysqli_error($con));
		}
				
		$count = mysqli_num_rows($res);
		if($count==1) {
			$_SESSION['username']= $username1;
			$_SESSION['password']= $password1;
			$_SESSION['type']= $type;				
			header('location: admin.php');
		}
		else {	
		echo '<script type="text/javascript">alert("admin  Username or Password");window.location=\'Index.php\';</script>';			
		}
	}

if($type=='Student'){
		$sql = "select * from login where username = '".$username1."' and password = '".$password1."' and role = '".$type."'";
		
		$res = mysqli_query($con,$sql);

		if(!$res) {
			die(mysqli_error($con));
		}
				
		$count = mysqli_num_rows($res);
		if($count==1) {
			$_SESSION['username']= $username1;
			$_SESSION['password']= $password1;
			$_SESSION['type']= $type;				
			header('location: student.php');
		}
		else {	
		echo '<script type="text/javascript">alert("Invalid Username or Password");window.location=\'Index.php\';</script>';			
		}
	}

if($type=='Lecturer'){
		$sql = "select * from login where username = '".$username1."' and password = '".$password1."' and role = '".$type."'";
		
		$res = mysqli_query($con,$sql);

		if(!$res) {
			die(mysqli_error($con));
		}
				
		$count = mysqli_num_rows($res);
		if($count==1) {
			$_SESSION['username']= $username1;
			$_SESSION['password']= $password1;
			$_SESSION['type']= $type;				
			header('location: lecturer.php');
		}
		else {	
		echo '<script type="text/javascript">alert("Invalid Username or Password");window.location=\'Index.php\';</script>';			
		}
	}



	else{
		
		echo '<script type="text/javascript">alert("Please select your role");window.location=\'Index.php\';</script>';			
	}
	
	
	
	
	
	}

	?>
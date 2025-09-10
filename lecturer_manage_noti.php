<?php
	include 'connection.php';
	include 'session.php';
?>
<!doctype html>
<html>
    <head>
        <title>Index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
   	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
        <style>
           
            .b1{
                background: url('img/header.jpg');
                background-size:100% 300px;
                height: 300px;
                text-align: center;
              padding-top:10px;
            }
           
            .v1 img{
                text-align: center;
                border-radius:100px;
            }
            bm{
                text-align: center;
            }
            .navbar{
                margin:0px;
            }
            .no-padding{
                
                padding:0px!important;
            }
            .a{
                padding-left:0px!important;
            }
             .b{
                padding-right:0px!important;
            }
            .backa{
                background-color: lightsteelblue;
                height: 200px;
            }
            .b1 h1{
                color:black;
                padding-top:100px;
                font-size:52px;
                font-weight:bold;
            }
             .box1{
                background-color:grey;
                height: 150px;
                text-align: center;
                padding-top: 30px;
                margin-top: 20px;
                
            }
            .box2{
                background-color:grey;
                height: 150px;
                text-align: center;
                padding-top: 30px;
                 margin-top: 20px;
               
                
            }
            .box2 h1{
                 font-weight: bold;
            }
             .box1 h1{
                 font-weight: bold;
            }
			.no-padding-l{
				padding-left:0px;
				
			}
			.no-padding-r{
				padding-right:0px;
				
			}
			.no-padding{
				padding:0px;
				
			}
			
        </style>
       
    </head>
    <body>
        <div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 no-padding">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="#" class="navbar-brand">Online Notification</a>
						<button type="button" data-toggle="collapse" class="navbar-toggle" data-target="#menu" >
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						
						</button>
					</div>
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav navbar-right">
                            <li ><a href="lecturer.php">HOME</a></li>
                            <li ><a href="lecturer_Profile.php">View Profile</a></li>
                            <li ><a href="lecturer_Post_noti.php">Post Notification</a></li>
							<li  class="active" ><a href="lecturer_manage_noti.php">Manage Notification</a></li>
							
                            <li ><a href="lecturer_college_noti.php">College Notification</a></li>
							<li><a href="logout.php" >Logout</a></li>							
						</ul>
						
					</div>
				</div>
			</nav>
		</div>
	</div>
	</div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 b1">
                    <h1 align="center">Manage Online Noticeboard</h1>
                </div>
            </div>
        </div>
		<br/>
	
	<?php
	
	include 'connection.php';

	
	$query="select * from lecturers where username='".$login_session."' and password='$paswd'";
	
	$result=mysqli_query($con,$query);

	if(!$result)
	{
		echo "fail";
	}
	while($row=mysqli_fetch_assoc($result))
	{
		$name=$row['name'];
		$lecid=$row['id'];
		
		$email=$row['email'];
		$phone=$row['phone'];
		$username=$row['username'];
		$password=$row['password'];
		$lec_course=$row['course'];
		$lec_subject=$row['subject'];
		
	}
	?>
	
	
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 align="center" style="font-weight:bold;">Lecturer Posted Notification</h1><hr/><br/>
				</div>
				<div class="col-md-offset-1 col-md-10">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">Onlineclass Notification</h1>
						</div>
						<div class="panel-body">
							 <table class="table table-striped">
								<tr align="center">
									<th align="center">Course</th>
									<th align="center">Semester</th>
									<th align="center">Subject</th>
									<th align="center">Platform</th>
									<th align="center">Date</th>
									<th align="center">Start Time</th>
									<th align="center">End Time</th>
									<th align="center">Action</th>
									
									
								</tr>
								<?php

					$sql="select * from online_class where lect_id='".$lecid."'";
					$re=mysqli_query($con,$sql);
					while($m=mysqli_fetch_assoc($re))
					{	 
						$cl_id=$m['id'];
						$cl_course=$m['course'];
						$cl_semester=$m['semester'];
						$cl_subject=$m['subject'];
						$cl_platform=$m['platform'];
						$cl_date=$m['date'];
						$cl_start=$m['start'];
						$cl_end=$m['end'];
						
						
					?>
						
						<tr>
							<td><?php echo $cl_course; ?></td>
							<td><?php echo $cl_semester; ?></td>
							<td><?php echo $cl_subject; ?></td>
							<td><?php echo $cl_platform; ?></td>
							<td><?php echo $cl_date; ?></td>
							<td><?php echo $cl_start; ?></td>
							<td><?php echo $cl_end; ?></td>
							
							<td><a href="dcnbl.php?del=<?php echo $cl_id; ?>" class="btn btn-danger btn-block">Delete</a></td>
						
						</tr>
						<?php } ?>
													 
							 </table>
                           

						</div>
					</div>
				<br/>			</div>
	
					
				<div class="col-md-offset-1 col-md-10">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">Mocktest Notification</h1>
						</div>
						<div class="panel-body">
							<table class="table table-striped">
								<tr align="center">
									<th align="center">Course</th>
									<th align="center">Semester</th>
									<th align="center">Subject</th>
									<th align="center">Test</th>
									<th align="center">Total Marks</th>
									<th align="center">Time</th>
									<th align="center">Date</th>
									<th align="center">Action</th>
								</tr>
								<?php

								$sql23="select * from mock_test  where lect_id='".$lecid."'";
								$re23=mysqli_query($con,$sql23);
								while($m23=mysqli_fetch_assoc($re23))
								{	 
									$c2_id=$m23['id'];
									$c2_course=$m23['course'];
									$c2_semester=$m23['semester'];
									$c2_subject=$m23['subject'];
									$c2_test=$m23['test'];
									$c2_tot_marks=$m23['total_marks'];
									$c2_time=$m23['time'];
									$c2_date=$m23['date'];
								?>
			
						<tr>
							<td><?php echo $c2_course; ?></td>
							<td><?php echo $c2_semester; ?></td>
							<td><?php echo $c2_subject; ?></td>
							<td><?php echo $c2_test; ?></td>
							<td><?php echo $c2_tot_marks; ?></td>
							<td><?php echo $c2_time; ?></td>
							<td><?php echo $c2_date; ?></td>
							
							<td><a href="dtnbl.php?del=<?php echo $c2_id; ?>" class="btn btn-danger btn-block">Delete</a></td>
						
						</tr>
						<?php } ?>
													 
					 </table>

						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	
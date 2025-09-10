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
			.text-size h4{
				margin:10px;
				font-weight:bold;
				color:black;
			}
			
			.panel-body{
				background:url('img/notific.jpg');
				background-size:100%;
				
			}
			.cir a{
				color:dodgerblue;
				font-size:18px;
				font-weight:bold;
				
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
							<li ><a href="lecturer_manage_noti.php">Manage Notification</a></li>
							
                            <li  class="active" ><a href="lecturer_college_noti.php">College Notification</a></li>
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
                    <h1 align="center">Online Noticeboard</h1>
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
					<h1 align="center" style="font-weight:bold;">Admin Posted Notification</h1><br/>
				</div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">Exam Notification</h1>
						</div>
						<div class="panel-body">
						
							<?php

							$sql="select * from exam_fees";
							$re=mysqli_query($con,$sql);
							while($m=mysqli_fetch_assoc($re))
							{	 
								$c_id=$m['id'];
								$course=$m['course'];
								$semester=$m['semester'];
								$description=$m['description'];
								$examfees=$m['examfees'];
								$last_date=$m['last_date'];
								$clg_circular=$m['circular'];
								
								
							?>
							<div class="col-md-12 text-size " align="center">
								<div class="col-md-6">
									<h4>Course : <?php echo $course; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Semester : <?php echo $semester; ?></h4>
								</div>
								<div class="col-md-12" align="center">
									<h4>Description : <?php echo $description; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Exam Fees : <?php echo $examfees; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Last Date : <?php echo $last_date; ?></h4>
								</div>
								<div class="cir">
									<a target="_blank" href="upload/<?php echo $clg_circular; ?>">View Exam Circular</a>
								</div>
							</div>
							<?php } ?>
								
						</div>
					</div>
				</div>
					
					<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">College Event Notification</h1>
						</div>
						<div class="panel-body">
						
								
								<?php

								$sql2="select * from college_event";
								$re2=mysqli_query($con,$sql2);
								while($m2=mysqli_fetch_assoc($re2))
								{	 
									$c_id2=$m2['id'];
									$event_name2=$m2['event_name'];
									$description2=$m2['description'];
									$location2=$m2['location'];
									$last_date2=$m2['last_date'];
									$event_pic=$m2['event_pic'];
									
								?>
								
							<div class="col-md-12 text-size " align="center">
								<div class="col-md-12">
									<h4>Event Name : <?php echo $event_name2; ?></h4>
								</div>
								<div class="col-md-12">
									<h4>Description : <?php echo $description2; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Location : <?php echo $description2; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Date : <?php echo $last_date2; ?></h4>
								</div>
								<div class="cir col-md-12">
									<a target="_blank" href="upload/<?php echo $event_pic; ?>">View Exam Circular</a>
								</div>
							</div>	
						<?php } ?>
					
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	
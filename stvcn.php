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
            .b2{
                background-color: lightskyblue;
                height: 400px;
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
			.text-size h4{
				margin:10px;
				font-weight:bold;
				color:black;
			}
			
			.panel-body_exam{
				background:url('img/notific.jpg');
				background-size:100%;
				
			}
			.panel-body_lect{
				background:url('img/header_book1.jpg');
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
                            <li class="" ><a href="student.php">HOME</a></li>
						
                             <li><a href="student_view_profile.php">View Profile</a></li>
                                <li  class="active"><a href="stvcn.php">View Class Notification</a></li>
						
                            	<li><a href="logout.php">Logout</a></li>
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
                    <h1 align="center">Online NoticeBoard</h1>
				</div>
			</div>
			<br/>
		</div>
			
	<?php

	
	//echo $login_session;
	//echo $paswd;
	

		$sql4="select * from student where username='$login_session' and password='$paswd'";
			$re4=mysqli_query($con,$sql4);
			while($m4=mysqli_fetch_assoc($re4))
			{	 
				$u_id1=$m4['id'];
			
			}
			
	
	$query="select * from student where id='".$u_id1."'";
	
	$result=mysqli_query($con,$query);
	
	
	if(!$result)
	{
		echo "fail";
	}
	while($row=mysqli_fetch_assoc($result))
	{
		$uid=$row['id'];
		$name=$row['name'];
		$email=$row['email'];
		$phone=$row['phone'];
		$stcourse=$row['course'];
		$stsemester=$row['semester'];
		$username=$row['username'];
		$password=$row['password'];
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
						<div class="panel-body panel-body_exam">
						
							<?php

							$sql="select * from exam_fees where course='".$stcourse."' and semester='".$stsemester."'";
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
								<div class="cir col-md-12">
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
						<div class="panel-body panel-body_exam">
						
								
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
									<a target="_blank" href="upload/<?php echo $event_pic; ?>">View More</a>
								</div>
							</div>	
							<hr/>
						<?php } ?>
					
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 align="center" style="font-weight:bold;">Lecturer Posted Notification</h1><br/>
				</div>
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">Class Notification</h1>
						</div>
						<div class="panel-body panel-body_lect">
						<?php

					$sql3="select * from online_class where course='".$stcourse."' and semester='".$stsemester."'";
					$re3=mysqli_query($con,$sql3);
					while($m4=mysqli_fetch_assoc($re3))
					{	 
						$cl_id4=$m4['id'];
						$cl_course4=$m4['course'];
						$cl_semester4=$m4['semester'];
						$cl_subject4=$m4['subject'];
						$cl_platform4=$m4['platform'];
						$cl_date4=$m4['date'];
						$cl_start4=$m4['start'];
						$cl_end4=$m4['end'];
						
						
					?>
							<div class="col-md-12 text-size " align="center">
								<div class="col-md-6">
									<h4>Course : <?php echo $cl_course4; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Semester : <?php echo $cl_semester4; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Subject : <?php echo $cl_subject4; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Platform : <?php echo $cl_platform4; ?></h4>
								</div>
								<div class="col-md-4">
									<h4>Date : <?php echo $cl_date4; ?></h4>
								</div>
								<div class="col-md-4">
									<h4>Start Time : <?php echo $cl_start4; ?></h4>
								</div>
								<div class="col-md-4">
									<h4>End Time : <?php echo $cl_end4; ?></h4>
								</div>
								
							</div>
							<?php } ?>
								
						</div>
					</div>
				</div>
					<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">Test Notification</h1>
						</div>
						<div class="panel-body panel-body_lect">
						<?php

					$sql23="select * from mock_test where course='".$stcourse."' and semester='".$stsemester."'";
				
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
							<div class="col-md-14 text-size " align="center">
								<div class="col-md-6">
									<h4>Course : <?php echo $c2_course; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Semester : <?php echo $c2_semester; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Subject : <?php echo $c2_subject; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Test / Exam : <?php echo $c2_test; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Total Marks : <?php echo $c2_tot_marks; ?></h4>
								</div>
								<div class="col-md-6">
									<h4> Date : <?php echo $c2_date; ?></h4>
								</div>
								<div class="col-md-6">
									<h4>Time : <?php echo $c2_time; ?></h4>
								</div>
								
							</div>
							<?php } ?>
								
						</div>
					</div>
				</div>
				
				
				
			</div>
	</div>
         
        
         
        <br/><br/>
    

</div>
</div>
</div>
</div>
</div>
</div>
</div>
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
                padding-top:80px;
                font-size:52px;
                font-weight:bold;
            }
			.no-padding-l{
				padding-left:0px!important;
				
			}
			.no-padding-r{
				padding-right:0px;
				
				
			}
			tr th{
				text-align:center!important;
				
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
                            <li><a href="admin.php">HOME</a></li>
                            <li  ><a href="admin_course.php">Courses</a></li>
                             <li  ><a href="admin_subjects.php">Subjects</a></li>
                             <li  ><a href="admin_student_reg.php">Student Registration</a></li>
                            <li ><a href="admin_reg_students.php">Registered Students</a></li>
                             <li  ><a href="admin_add_lecturer.php">Add Lecturers</a></li>
                            <li  ><a href="admin_view_lecturers.php">View Lecturers</a></li>
                            <li  ><a href="admin_post_notification.php">Post Notification</a></li>
                            <li    class="active"  ><a href="admin_manage_notification.php">Manage Notification</a></li>
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
		<br/><br/>
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
							 <table class="table table-striped">
								<tr align="center">
									<th align="center">Course</th>
									<th align="center">Semester</th>
									<th align="center">Description</th>
									<th align="center">Exam Fees</th>
									<th align="center">Last date</th>
									<th align="center">Action</th>
								</tr>
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
						
					?>
								
								<tr>
									<td><?php echo $course; ?></td>
									<td><?php echo $semester; ?></td>
									<td><?php echo $description; ?></td>
									<td><?php echo $examfees; ?></td>
									<td><?php echo $last_date; ?></td>
									<td><a href="delete_exam_notification.php?del=<?php echo $c_id; ?>" class="btn btn-danger btn-block">Delete</a></td>
								
								</tr>
								<?php } ?>
															 
							 </table>
                           

						</div>
					</div>
				</div>
					
					<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">College Event Notification</h1>
						</div>
						<div class="panel-body">
							<table class="table table-striped">
								<tr align="center">
									<th align="center">Event name</th>
									<th align="center">Description</th>
									<th align="center">Location</th>
									<th align="center">Last date</th>
									<th align="center">Action</th>
								</tr>
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
								?>
			
						<tr>
							<td><?php echo $event_name2; ?></td>
							<td><?php echo $description2; ?></td>
							<td><?php echo $location2; ?></td>
							<td><?php echo $last_date2; ?></td>
							<td><a href="delete_event_notification.php?del=<?php echo $c_id2; ?>" class="btn btn-danger btn-block">Delete</a></td>
						
						</tr>
						<?php } ?>
													 
					 </table>

						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
		
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

					$sql="select * from online_class";
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
							
							<td><a href="delete_class_notification.php?del=<?php echo $cl_id; ?>" class="btn btn-danger btn-block">Delete</a></td>
						
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

								$sql23="select * from mock_test";
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
							
							<td><a href="delete_test_notification.php?del=<?php echo $c2_id; ?>" class="btn btn-danger btn-block">Delete</a></td>
						
						</tr>
						<?php } ?>
													 
					 </table>

						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	<!--
		<?PHP echo $user_check; ?>
		<?PHP echo $pass; ?>
	
	-->
        
         
        <br/><br/>
    </body>
</html>




        
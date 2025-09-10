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
			.no-pad-l{
				padding-left:0px;
				padding-right:0px;
				
			}
			.no-pad-r{
				padding-right:0px;
				padding-right:0px;
				
			}
			tr th{
				text-align:center!important;
				
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
                             <li   class="active" ><a href="admin_student_reg.php">Student Registration</a></li>
                            <li  ><a href="admin_reg_students.php">Registered Students</a></li>
                             <li  ><a href="admin_add_lecturer.php">Add Lecturers</a></li>
                            <li  ><a href="admin_view_lecturers.php">View Lecturers</a></li>
                           <li  ><a href="admin_post_notification.php">Post Notification</a></li>
                            <li  ><a href="admin_manage_notification.php">Manage Notification</a></li>
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
                    <h1 align="center">Students Registration Application</h1>
                </div>
            </div>
        </div>
		<br/><br/>
		<div class="container">
			<div class="row">
				
				<div class="col-md-offset-2 col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">Student Application</h1>
						</div>
						<div class="panel-body">
							 <table class="table table-striped">
								<tr align="center">
									<th align="center">Name</th>
									<th align="center">Email</th>
									<th align="center">Phone</th>
									<th align="center">Course</th>
									<th align="center">Semester</th>
									
									<th  align="center" colspan="2">Action</th>
								</tr>
								<?php

								$sql="select * from student where status='Pending'";
								$re=mysqli_query($con,$sql);
								while($m=mysqli_fetch_assoc($re))
								{	 
									$c_id=$m['id'];
									$name=$m['name'];
									$email=$m['email'];
									$phone=$m['phone'];
									$course=$m['course'];
									$semester=$m['semester'];
									
								
								?>
								<tr>
									<td align="center"><span align="center"><?php echo $name; ?></span></td>
									<td align="center"><span align="center"><?php echo $email; ?></span></td>
									<td align="center"><span align="center"><?php echo $phone; ?></span></td>
									<td align="center"><span align="center"><?php echo $course; ?></span></td>
									<td align="center"><span align="center"><?php echo $semester; ?></span></td>
									
									<td><a href="accept_student.php?acc=<?php echo $c_id; ?>" class="btn btn-success btn-block">Approve</a></td>
									<td><a href="delete_student.php?del=<?php echo $c_id; ?>" class="btn btn-danger btn-block">Delete</a></td>
								

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




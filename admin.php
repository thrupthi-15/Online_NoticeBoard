<?php
include 'connection.php';



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
                background-size:100% 710px;
				background-attachment:fixed;
                height: 710px;
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
                padding-top:50px;
                font-size:82px;
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
                            <li class="active"><a href="admin.php">HOME</a></li>
                            <li  class=""  ><a href="admin_course.php">Courses</a></li>
                             <li  ><a href="admin_subjects.php">Subjects</a></li>
                             <li  ><a href="admin_student_reg.php">Student Registration</a></li>
                            <li  ><a href="admin_reg_students.php">Registered Students</a></li>
                             <li  ><a href="admin_add_lecturer.php">Add Lecturers</a></li>
                            <li  ><a href="admin_view_lecturers.php">View Lecturers</a></li>
                            <li  ><a href="admin_post_notification.php">Post Notification</a></li>
                            <li  ><a href="admin_manage_notification.php">Manage Notification</a></li>
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
                <div class="col-md-12 b1"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                    <h1 align="center">Welcome Admin</h1>
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




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
				padding-left:5px;
				padding-right:5px;
				
			}
			.no-pad-r{
				padding-right:0px;
				padding-right:0px;
				
			}
			tr th{
				text-align:center!important;
				
			}
			tr td{
				font-size:20px;
				
			}
			.
			
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
                            <li ><a href="admin_course.php">Courses</a></li>
                             <li   class="active"  ><a href="#">Subjects</a></li>
                             <li  ><a href="admin_student_reg.php">Student Registration</a></li>
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
                    <h1 align="center">Subject Details</h1>
                </div>
            </div>
        </div>
		<br/><br/>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">Create Subject</h1>
						</div>
						<div class="panel-body">
							<form action="subject_insert.php" method="post">
							<div class="form-group">
								<div class=" col-md-6  no-pad-l">
										<input type="text" name="subject" placeholder="Enter Subject name" class="form-control" />
									 </div>
									
									  <div class="col-md-6  no-pad-l">
											<input type="submit" value="Create" class="btn btn-primary form-control"/>
									</div>
							 </div>
							   
									
								</div>
										  
							</form>
							 
				
						</div>
					</div>
					
				<div class="col-md-offset-1 col-md-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">Added Subjects</h1>
						</div>
						<div class="panel-body">
							 <table class="table table-striped">
								<tr align="center">
									
									<th align="center">Subject</th>
									<th  align="center" colspan="2">Action</th>
								</tr>
								<?php

								$sql="select * from subject";
								$re=mysqli_query($con,$sql);
								while($m=mysqli_fetch_assoc($re))
								{	 
									$c_id=$m['id'];
									$subject=$m['subject'];
									
								
								?>
								<tr>
									<td align="center"><span align="center"><?php echo $subject; ?></span></td>
									
									<td><a href="delete_subject.php?del=<?php echo $c_id; ?>" class="btn btn-danger btn-block">Delete</a></td>
								

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




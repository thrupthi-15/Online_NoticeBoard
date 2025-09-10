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
                             <li  ><a href="admin_student_reg.php">Student Registration</a></li>
                            <li ><a href="admin_reg_students.php">Registered Students</a></li>
                             <li  class="active"   ><a href="admin_add_lecturer.php">Add Lecturers</a></li>
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
                    <h1 align="center">Add Lecturers</h1>
                </div>
            </div>
        </div>
		<br/><br/>
		<div class="container">
			<div class="row">
				
				<div class="col-md-offset-2 col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">Add Lecturer</h1>
						</div>
						<div class="panel-body">
							<form action="lecture_insert.php" method="post">
		  
		  
							<div class="form-group">
								<input type="text" placeholder="Name"  name="name" class="form-control"/>
                            </div>
                           
							<div class="form-group">
								<input type="text" placeholder="Email"  name="email" class="form-control"/>
                            </div>
                            
                            <div class="form-group">
								<input type="number" placeholder="Phone"  name="phone" class="form-control"/>
                            </div>
                           
                              
                     
                          
                         <div class="col-md-12 no-padding form-group">   
                   <div class="col-md-6 no-padding-l">
                            <select name="course" class="form-control">
								<option>--Choose Course--</option>
        
                                        
                                    
					<?php

					$sql="select * from course";
					$re=mysqli_query($con,$sql);
					while($m=mysqli_fetch_assoc($re))
					{	 
						$c_id=$m['id'];
						$course=$m['course'];
					
					?>
						       <option><?php echo $course; ?></option>		
					<?php } ?>
							</select>
                            </div>
                           
                             <div class=" col-md-6 no-padding-r">
                            
                            <select name="subject" class="form-control">
								<option>--Choose Subject--</option>
					
								<?php

								$sql1="select * from subject";
								$re1=mysqli_query($con,$sql1);
								while($m1=mysqli_fetch_assoc($re1))
								{	 
									$s_id=$m1['id'];
									$subject=$m1['subject'];
								
								?>
											<option><?php echo $subject; ?></option>
								<?php } ?>
								</select>
							</div>
                            
							</div>
							 
							 <div class="col-md-12 no-padding form-group">   
                   <div class="col-md-6 no-padding-l">
                            <input type="text" placeholder="User Name"  name="username" class="form-control"/>
                            </div>
                           
                             <div class=" col-md-6 no-padding-r">
                            
                            <input type="password" placeholder="Password"  name="password" class="form-control"/>
                            </div>
                            
                             </div> 
							 
                            
                        
                        </div>
                    
                              
                        <div class="modal-footer">
                            <div class="bm">
                        <input type="submit" value="Add Lecturer" class="btn btn-primary form-control"/>
                                </div>
                            
                        </div>
                                  
                    </form>

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




        
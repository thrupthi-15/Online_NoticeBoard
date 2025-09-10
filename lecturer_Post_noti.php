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
                            <li class="active" ><a href="lecturer_Post_noti.php">Post Notification</a></li>
							<li ><a href="lecturer_manage_noti.php">Manage Notification</a></li>
							
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
                    <h1 align="center">Post Notifications</h1>
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
				
				<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">Onlineclass Notification</h1>
						</div>
						<div class="panel-body">
			
                            <form action="post_class_notification.php" method="POST"  enctype="multipart/form-data" >  
                     
                          
                         <div class="col-md-12 no-padding form-group">   
                   <div class="col-md-6 no-padding-l">
                            <input type="text" value="<?php echo $lec_course; ?>"   name="course" class="form-control hidden">
							<label>Course : <?php echo $lec_course; ?></label>
							<input type="text" value="<?php echo $lecid; ?>"   name="lec_id" class="form-control hidden">
								
								
							</select>
                       </div>
                           
                             <div class=" col-md-6 no-padding-r">
							 <label>Subject : <?php echo $lec_subject; ?></label>
								 <input type="text" value="<?php echo $lec_subject; ?>"  name="subject" class="form-control hidden">
							
							</div>
                            
							</div>
							 <div class=" col-md-12 form-group no-padding">
							<select type="text" placeholder="Semester" name="semester" class="form-control">
								<option>--Select semester--</option>
								 <option>1</option>
								 <option>2</option>
								 <option>3</option>
								 <option>4</option>
								 <option>5</option>
								 <option>6</option>
								 
							</select>
							</div>
						   
                    <div class="form-group col-md-6 no-padding-l">

						<select type="text" placeholder="test" name="platform" class="form-control">
								<option>-- Select Online Platform--</option>
								 <option>Google Meet</option>
								 <option>Zoom</option>
								 
							</select>
					</div>
                    <div class="form-group col-md-6 no-padding-r">
						<input type="date" name="date" placeholder="Enter date" class="form-control" />
					</div>
					<div class="form-group col-md-6 no-padding-l">
					<label>Start Time</label>
						<input type="time" name="st_time" placeholder="Start Time" class="form-control" />
					</div>
                    <div class="form-group col-md-6 no-padding-r">
					<label>End Time</label>
						<input type="time" name="en_time" placeholder="End Time" class="form-control" />
					</div>
					
                         
                        </div>
                    
                              
                        <div class="modal-footer">
                            <div class="bm">
                        <input type="submit" value="Post Class Notification" class="btn btn-primary form-control"/>
                                </div>
                            
                        </div>
                                  
                    </form>

						</div>
					</div>
					
					<div class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1 class="panel-title">Mocktest Notification</h1>
						</div>
						<div class="panel-body">
			
                              <form action="post_test_notification.php" method="POST"  enctype="multipart/form-data" >  
                     
                          
                         <div class="col-md-12 no-padding form-group">   
                   <div class="col-md-6 no-padding-l">
				   <label>Course : <?php echo $lec_course; ?></label>
                            <input type="text" value="<?php echo $lec_course; ?>"   name="course" class="form-control hidden">
								  <input type="text" value="<?php echo $lecid; ?>"   name="lec_id" class="form-control hidden">
								
								
							</select>
                       </div>
                           
                             <div class=" col-md-6 no-padding-r">
							 	<label>Subject : <?php echo $lec_subject; ?></label>
								 <input type="text" value="<?php echo $lec_subject; ?>"  name="subject" class="form-control hidden">
							
                           
							</div>
                            
							</div>
							 <div class=" col-md-12 form-group no-padding">
							<select type="text" placeholder="Semester" name="semester" class="form-control">
								<option>--Select semester--</option>
								 <option>1</option>
								 <option>2</option>
								 <option>3</option>
								 <option>4</option>
								 <option>5</option>
								 <option>6</option>
								 
							</select>
							</div>
						   
                    <div class="form-group col-md-6 no-padding-l">

						<select type="text" placeholder="test" name="test" class="form-control">
								<option>-- Select Test--</option>
								 <option>Test</option>
								 <option>Exam</option>
								 
							</select>
					</div>
                    <div class="form-group col-md-6 no-padding-r">
						<input type="number" name="tot_marks" placeholder="Enter Total Marks" class="form-control" />
					</div>
					<div class="form-group col-md-6 no-padding-l">
					<label>Time</label>
						<input type="time" name="time" placeholder="Enter Time" class="form-control" />
					</div>
                    <div class="form-group col-md-6 no-padding-r">
					<label>Date</label>
						<input type="date" name="last_date" placeholder="Last Date" class="form-control" />
					</div>
					
                         
                        </div>
                    
                              
                        <div class="modal-footer">
                            <div class="bm">
                        <input type="submit" value="Post Test Notification" class="btn btn-primary form-control"/>
                                </div>
                            
                        </div>
                                  
                    </form>


						</div>
					</div>
					
					
					
				</div>
			</div>
	
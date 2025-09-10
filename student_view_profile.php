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
						
                             <li class="active"><a href="student_view_profile.php">View Profile</a></li>
                               <li ><a href="stvcn.php">View Class Notification</a></li>
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
                    <h1 align="center">View Profile</h1>
				</div>
			</div>
			<br/>
			<div class="row">
                <div class="col-md-offset-3 col-md-6">
            
			
				<div class="panel panel-primary">
				<div class="panel-heading">
					<h1 class="panel-title">Update Profile - <span style="text-transform:capitalize"><?php echo $login_session; ?></span></h1>
				</div>
				<div class="panel-body">
			
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
		$course=$row['course'];
		$semester=$row['semester'];
		$username=$row['username'];
		$password=$row['password'];
	}
	?>
	
          <form action="updatebackend.php" method="post">
		  
		  <div class="form-group">
                            
                            <input type="text" value="<?php echo $uid; ?>"  name="id" class="form-control hidden"/>
                            </div>
		  
                        <div class="form-group">
                            
                            <input type="text" placeholder="Name" value="<?php echo $name; ?>" name="name" class="form-control"/>
                            </div>
                           
                            
                          <div class="form-group">
                            
                            <input type="text" placeholder="Email" value="<?php echo $email; ?>" name="email" class="form-control"/>
                            </div>
                            
                              <div class="form-group">
                            
                            <input type="number" placeholder="Phone" value="<?php echo $phone; ?>" name="phone" class="form-control"/>
                            </div>
                           
                              
                     
                              <div class="col-md-12 form-group no-padding">
                                    <div class="col-md-6 no-padding-l a">
									<label>Course : <?php echo $course; ?></label>
                                    <input type="text" placeholder="Course" value="<?php echo $course; ?>" name="course" class="form-control hidden">
                                      
                                        </div>
                           
                             
                             
                                  <div class="col-md-6 no-padding-r b">
								  <label>Semester : <?php echo $semester; ?></label>
                                    <input type="text" placeholder="Semester" value="<?php echo $semester; ?>" name="semester" class="form-control hidden">
                                     
                             </div>
                                 </div>
                      
                            
                        
                        </div>
                    
                              
						   <div class="col-md-offset-3 col-md-6 no-padding-r">
                            <div class="bm">
                        <input type="submit" value="Update Profile" class="btn btn-primary form-control"/>
                                </div>
                            
                        </div>
                                  
                    </form>
        
         
        <br/><br/>
    

</div>
</div>
</div>
</div>
</div>
</div>
</div>
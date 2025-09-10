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
                            <li class="active"  ><a href="lecturer_Profile.php">View Profile</a></li>
                             <li ><a href="lecturer_Post_noti.php">Post Notification</a></li>
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
                    <h1 align="center">View Lecturer Profile</h1>
                </div>
            </div>
        </div>
	
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
		$id=$row['id'];
		
		$email=$row['email'];
		$phone=$row['phone'];
		$username=$row['username'];
		$password=$row['password'];
		$course=$row['course'];
		$subject=$row['subject'];
		
	}
	?>
	
	
        
        <div class="container-fluid">
            <div class="row">
                
				
				
				<div class="panel-body">
				<div class="container">
				<div class="row">
				<div class="col-md-offset-3 col-md-6">
				<div class="panel panel-primary">
				<div class="panel-heading">
					Lecturer Profile
				</div>
				<div class="panel-body">
				
          <form action="lecture_updatebackend.php" method="post">
		  
		  <div class="form-group">
                            
                            <input type="text" placeholder="Id"  value="<?php echo $id; ?>" name="id" class=" hidden form-control"/>
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
                           
						    <div class="col-md-12 no-padding form-group">   
                   <div class="col-md-6 no-padding-l">
                            <input type="text" placeholder="Course" disabled  value="Course : <?php echo $course; ?>"  name="" class="form-control"/>
                            </div>
                           
                             <div class=" col-md-6 no-padding-r">
                            
                            <input type="text" placeholder="Subject" disabled   value="Subject : <?php echo $subject; ?>"  name="" class="form-control"/>
                            </div>
                            
                             </div> 
                              
                     
                          

                            
                        
                        </div>
                    
                              
                        <div class="modal-footer">
                            <div class="bm">
                        <input type="submit" value="Updata Profile" class="btn btn-primary form-control"/>
                                </div>
                            
                        </div>
                                  
                    </form>
				
				
				
				
				
				
				
				
				
            </div>
        </div>
        </div>
        
         
        <br/><br/>
    </body>
</html>
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
                            <li class="active" ><a href="Index.html">HOME</a></li>
                            <li ><a href="lecturer_Profile.php">View Profile</a></li>
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
                    <h1 align="center">Welcome Lecturer</h1>
                </div>
            </div>
        </div>
        
           <div class="container-fluid">
            <div class="row">
                
                <a style="color:white;" href="lecturer_Profile.php">    
                    <div class="col-md-offset-2 col-md-4">
					
                        <div class="box1">
                            <h1>Profile</h1>
                        </div>
					
                    </div>
					</a>
				<a style="color:white;" href="lecturer_Post_noti.php">  
                    <div class="col-md-4">
                        <div class="box2">
                         <h1>Post Notification</h1></div>
                    </div>
				</a>
			 <a style="color:white;" href="lecturer_college_noti.php">  
                 <div class="col-md-offset-4 col-md-4">
                        <div class="box2">
                         <h1>College Notification</h1></div>
                    </div>
                    
                </a>    
               
            </div>
        </div>
        
        <br/><br/>
    </body>
</html>
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
			.box_menu a{
				color:white;
				
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
                            <li class="active" ><a href="#">HOME</a></li>
							
                             <li ><a href="student_view_profile.php">View Profile</a></li>
                            <li ><a href="stvcn.php">View Class Notification</a></li>
							
                            <li><a href="logout.php" >LOGOUT</a></li>
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
                    <h1 align="center">Welcome Student</h1>
                </div>
            </div>
        </div>
          <div class="container-fluid">
            <div class="row box_menu">
                
                    <a href="student_view_profile.php">
                    <div class="col-md-offset-2 col-md-4">
                        <div class="box1">
                            <h1>Profile</h1>
                        </div>
                    </div>
					</a>
					<a href="stvcn.php">
                    <div class="col-md-4">
                        <div class="box2">
                         <h1>Notification</h1></div>
                    </div>
                    </a>
               
            </div>
        </div>
        
         
        <br/><br/>
    </body>
</html>
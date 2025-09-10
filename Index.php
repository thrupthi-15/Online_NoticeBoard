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
                background-color: lightgrey;
                height: 200px;
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
            .no-padding-l{
                
                padding-left:0px!important;
            }
            .no-padding-r{
                
                padding-right:0px!important;
            }
            .page_title{
				font-size:80px;
				background-color:transparent;
				position:absolute;
				z-index:1;
				left:230px;
				top:300px;
				color:#080808bf;
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
							<li class="active"><a href="#">HOME</a></li>
							
							
							
							

					<li class=""><a href="#" data-target="#bag" data-toggle="modal">REGISTER</a>
				
				</li>
				             <div class="modal fade" id="bag">            
                   
                        <div class="modal-dialog">
                            <div class="modal-content">
                                 <div class="modal-header">
                                     
                        <h2 class="modal-title" align="center"> Student Registration</h2>
                    </div>
                    
                    <div class="modal-body">
                         <form action="register_insert.php" method="post">
                        <div class="form-group">
                            
                            <input type="text" placeholder="Name" name="name" class="form-control"/>
                            </div>
                           
                            
                          <div class="form-group">
                            
                            <input type="text" placeholder="Email" name="email" class="form-control"/>
                            </div>
                            
                              <div class="form-group">
                            
                            <input type="number" placeholder="Phone" name="phone" class="form-control"/>
                            </div>
                           
                              
                     
                              <div class="col-md-12 form-group no-padding">
                                    <div class="col-md-6 no-padding-l a">
                                    <select type="text" placeholder="Course" name="course" class="form-control">
                                        <option>--Select course--</option>
                                         
                        
									<?php

									$sql="select * from course";
									$re=mysqli_query($con,$sql);
									while($m=mysqli_fetch_assoc($re))
									{	 
									$c_id=$m['id'];
									$course=$m['course'];

									?>  <option><?php echo $course; ?></option>
                                       <?php } ?>
                                    </select>
                                        </div>
                           
                             
                             
                                  <div class="col-md-6 no-padding-r b">
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
                                 </div>
                         <div class="col-md-12 no-padding form-group">   
                   <div class="col-md-6 no-padding-l">
                            <input type="text" placeholder="User Name" name="username" class="form-control"/>
                            </div>
                           
                             <div class=" col-md-6 no-padding-r">
                            
                            <input type="password" placeholder="Password" name="password" class="form-control"/>
                            </div>
                            
                             </div> 
                            
                        
                        </div>
                    
                              
                        <div class="modal-footer">
                            <div class="bm">
                        <input type="submit" value="Register" class="btn btn-primary form-control"/>
                                </div>
                            
                        </div>
                                  
                    </form>
                          </div>
                          </div>
                          </div>

				

							
							
							
							
							<li class=""><a href="#" data-target="#mode" data-toggle="modal">LOGIN</a></li>
                             <div class="modal fade" id="mode">            
                   
                        <div class="modal-dialog">
                            <div class="modal-content">
                                 <div class="modal-header">
                                     
                        <h2 class="modal-title" align="center"> Login to Your Account</h2>
                    </div>
                    
                    <div class="modal-body">
                         <form action="login_check.php" method="POST">
                        <div class="form-group">
                            <input type="text" placeholder="Username" name="username" class="form-control"/>
                            </div>
                          <div class="form-group">
                            <input type="password" placeholder="password" name="password" class="form-control"/>
                            </div>
                              <div class="form-group">
                                    <select type="text" placeholder="All" name="role" class="form-control">
                                        <option>--Select Role--</option>
                                         <option>Admin</option>
                                         <option>Lecturer</option>
                                         <option>Student</option>
                                    </select>
                                        </div>
                       </div>
						<div class="modal-footer">
                            <div class="bm">
                        <input type="submit" value="Login"  class="btn btn-primary form-control"/>
                                </div>
                             </div>
                                  
                    
                          </div>
                          </div>
                          </div>
							</form>
						</ul>
						
					</div>
				</div>
			</nav>
		</div>
	</div>
	</div>
        
		
		
		 <h1 class="page_title" align="center">Welcome to <br/> Online Notification System</h1>
		 
		 
		 
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-12  no-padding">
                    <div id="book" class="carousel slide " data-ride="carousel">
                        <ol class="carousel-indicators">
                   <li data-target="#book" data-slide-to="0" class="active"></li>
                            <li data-target="#book" data-slide-to="1"></li>
                            <li data-target="#book" data-slide-to="2"></li>
                   
               </ol>
                        <div class="carousel-inner">
                            
                            <div class="item active">
                            <img src="img/notific1.jpg" width="100%" height="1200px;"/>
                                </div>
                           <div class="item">
                            <img src="img/header_book.jpg" width="100%"  height="1200px;"/>
                                </div>
                            <div class="item">
                            <img src="img/header_book1.jpg" width="100%"  height="1200px;"/>
                            </div>
                        </div>
                        <a href="#book" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="#book" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    
                   
                </div>
            </div>
        </div><br>
        	
        <br/><br/>
    </body>
</html>
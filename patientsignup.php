<?php include("login.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Doctor Finder</title>

    <!-- Bootstrap core CSS -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.min.css" />
	<script type="text/javascript" src="moment-develop/min/moment.min.js"></script>
	<script src="bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js"></script>
    
	
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
	<style>
		.navbar{
			padding:20px;
			
		}
		#myCarousel{
			margin-top:-20px;
			
		}
		#plus{
			width:50px;
			height:50px;
		}
		.blackfont{
			color:grey;
			
		}
		.carousel-caption {
			
			
			width:500px;
			margin-bottom:150px;
			margin-left:500px;
			
			
			color:#404040;
		}
		.slide2{
			margin-bottom:150px;
			color:white;
		}
		.glyphicon-plus-sign{
			font-size:1.5em;
			
			color:#55a8b8;
			margin-top:-10px;
		}
		.alignbrand{
			 color:#5F5A55;
			font-size:2em;
		}
		.rightnav{
			color:#55a8b8;
			font-weight:bold;
			font-size:1.1em;
			
		}
		.rightnav:hover{
			color:#117E9E;
		}
		#topContainer{
			
			margin-top:-20px;
		}
		
		
		.subContainer1{
			
		
			/*border-right: 1px solid black;
			border-top:0px;
			border-left:0px;
			border-bottom:0px;
			
			*/
			float:left;
		}
		.subContainer2{
			
		
			/*border-right: 1px solid black;
			border-top:0px;
			border-left:0px;
			border-bottom:0px;
			
			*/
			float:left;
		}
		.marginleft{
			margin-left:-14px;
			
		}
		.clearfloat{
			clear:both;
		}
		#welcomeimg{
			margin-top:200px;
			width:300px;
			height:300px;
		}
		.margintop{
			margin-top:14px;
			
		}
		.marginbottom{
			margin-bottom:20px;
			
		}
		.marginleftpush{
			margin-left:60px;
		}
		.padding{
			width:300px;
		}
		
	</style>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    
     
    
<nav class="navbar navbar-default navbar-static-top" role="navigation">
          
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
				
              </button>
              <a class="navbar-brand" href="index.php"><span class="alignbrand"> D</span><span class="glyphicon glyphicon-plus-sign"></span><span class="alignbrand">ct</span><span class="glyphicon glyphicon-plus-sign"></span><span class="alignbrand">r Finder</span></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse ">
              <ul class="nav navbar-nav pull-right ">
			  
                <li class="dropdown" id="menuLogin">
					<a class="dropdown-toggle rightnav" href="#" data-toggle="dropdown" id="navLogin">Already SignedUp? Login </a>
					<div class="dropdown-menu " style="padding:10px; margin-left:-10px; border-radius:5px;" >
						<?php
								if($loginError)
								{
									echo '<div class ="alert alert-danger">'.$error.'</div>';
								}
									
							?>
						<form class="form" id="formLogin" method = "post"> 
							<div  class="form-group"> 

												<label for="email">Email Address</label>
                                               <input type="email" name ="email" class="form-control padding" placeholder="Your  email"  value = "<?php echo addslashes($_POST['email']); ?>"/> 
                                                 
                                  </div> 
								 <div  class="form-group"> 
								 <label for="email">Password</label>
                                 <input type="password" name ="password" class="form-control padding" placeholder="Your password" value = "<?php echo addslashes($_POST['password']); ?>" /> 
                                                 
                                  </div> 
								 <center><input type="submit" name ="submit" value ="Log In" class="btn btn-success btn-md marginTop"  /> </center>
						</form>
						
					</div>
				  </li>
				   <li><a href="doctorsignup.php"><span class="rightnav">Are You a doctor? SignUp here</span></a></li>
                 
              </ul>
            </div>
      
      
        </nav>

		<div class ="container" id ="topContainer">
			<div id ="subContentContainer" class="subContainer1">
		
			 <div  class="row"> 

                     <div  class="col-md-6  col-md-offset-3"  id="topRow"> 
							 <h1  class="marginTop">Sign Up</h1> 
							 
							 <hr>
							
							 <div id="searchFormMsg" style="display:none">
							 
							 </div>
							 
							 <?php
								if($error)
								{
									echo '<div class ="alert alert-danger">'.$error.'</div>';
								}
								if($message)
								{
									echo '<div class ="alert alert-success">'.$message.'</div>';		
								}	
							?>
						 
							 <form  id="patientLoginForm" class="marginTop" method = "post"> 

										  <div  class="form-group "> 
													<label for="patientemail">Email</label>
													<input type="email" name ="patientemail" id="patientemail" class="form-control" placeholder="Enter Your email" value = "<?php echo addslashes($_POST['patientemail']); ?>" /> 
														 
										  </div> 
										  <div  class="form-group "> 
													<label for="confirmemail">Confirm Email</label>
													<input type="email" name ="confirmemail" id="confirmemail" class="form-control" placeholder="Confirm your email" value = "<?php echo addslashes($_POST['confirmemail']); ?>" /> 
														 
										  </div> 
										<div  class="form-group"> 
															<label for="loginpassword">Create a Password(Atleast 6 Characters)</label>
                                                            <input  type="password" name ="loginpassword" placeholder="Enter a Password" class="form-control" value = "<?php echo addslashes($_POST['loginpassword']); ?>"/> 

                                         </div>
										 <div  class="form-group col-md-6 marginleft "> 

														<label for="patientfname">First Name</label>
													   <input type="text" size="30" id="patientfname" name ="patientfname" class="form-control" placeholder="First name"  value = "<?php echo addslashes($_POST['patientfname']); ?>"/> 
														 
										  </div> 
										 <div  class="form-group col-md-6 marginleft "> 
													<label for="patientlname">Last Name</label>
													<input type="text" size="30" id="patientlname" name ="patientlname" class="form-control" placeholder="Last name" value = "<?php echo addslashes($_POST['patientlname']); ?>" /> 
														 
										  </div> 
										 
										<div class="form-group">
													<label for="title">Date Of Birth</label>
														<div class='input-group date' id='datetimepicker1'>

															<input type='text' class="form-control" id='dob' name='dob' data-date-format="MM/DD/YYYY" placeholder="MM/DD/YYYY" />
															<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
															</span>
														</div>
										</div>
												
											<label for="sex">Sex</label>
										
										 <div  class="form-group"> 
													
													<input type="radio" name="sex" value="male" checked>Male
													<input type="radio" name="sex" value="female">Female
										  </div> 
										 
										  <input type="submit" name ="submit" id ="submit" value ="Click here to Sign Up" class="btn btn-primary btn-lg margintop marginbottom marginleftpush" /> 
								
							 </form>
                     </div> 
					 
					 
        </div> 
		
			</div>
			<div id ="subImgContainer" class="subContainer2">
				
				<img id="welcomeimg" src ="images/welcome.jpg" />
			</div>
		
		
		</div>
     
	<div class="clearfloat"></div>
	<footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	

 <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
					pickTime: false
				});
				
		$("#topContainer").css("min-height",$(window).height());
		$(".subContainer1").css("min-height",$(window).height()-150);
		$(".subContainer2").css("min-height",$(window).height()-150);
		$(".subContainer1").css("max-width","60%");
		$(".subContainer2").css("max-width","40%");
		
		
		
            });
        </script>
  </body>
</html>

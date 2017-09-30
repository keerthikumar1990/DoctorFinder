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
			border-right:1px solid #F4F2F2;
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
		.subcontent{
			margin-top:100px;
		}
		.contentheading{
			font-size:1.2em;
			font-weight:bold;
			color:#55A8B8;
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
						
						<form class="form" id="formLogin" method="post"> 
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
				   <li><a href="signuplanding.php"><span class="rightnav">Sign Up</span></a></li>
                 
              </ul>
            </div>
      
      
        </nav>
							<?php
								if($loginError)
								{
									echo '<div class ="alert alert-danger"><center>'.$loginError.'</center></div>';
								}
									
							?>
		<div class ="container" id ="topContainer">
			<div id ="subContentContainer" class="subContainer1">
		
				 <div  class="row"> 
						<div  class="col-md-6  col-md-offset-3 subcontent" >
								 <p  class="marginTop contentheading">I am a new patient</p> 
								 <p> Find a doctor near your locality and book an appointment online for free</p>
								   <p><a class="btn btn-default" href="patientsignup.php" role="button">Sign Up &raquo;</a></p>
					
						</div>
			
			</div>
		</div>
		
			<div id ="subImgContainer" class="subContainer2">
					<div  class="col-md-6  col-md-offset-3 subcontent" >
					 <p  class="marginTop contentheading">I am a doctor</p> 
					 <p>Doctor Finder helps new patients find you and book an appointment based on your 
					 availability.</p>
					   <p><a class="btn btn-default" href="doctorsignup.php" role="button">Learn More and Sign Up &raquo;</a></p>
					
					</div> 
				
			</div>
		
		
		</div>
     
	<div class="clearfloat"></div>
	<footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


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
		$(".subContainer1").css("min-width","45%");
		$(".subContainer2").css("min-width","55%");
		
		
		
            });
        </script>
  </body>
</html>

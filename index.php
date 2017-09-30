<?php 
// session_start();
include("connection.php");
include("login.php"); ?>
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
						

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
	  <?php
								if($message)
								{
									echo '<div class ="alert alert-success"><center>'.$message.'</center></div>';
								}else if($error){
									echo '<div class ="alert alert-danger"><center>'.$error.'</center></div>';
								}
									
							?>
      <div class="carousel-inner" role="listbox">
						
        <div class="item active">
		
          <img src="images/therm.jpg" alt="First slide">
		  
          <div class="container">
		  
            <div class="carousel-caption slide2">
              <h1>Searching for a doctor?</h1>
              <p>Join us and search for doctors near your locality and book appointments instantly.
              You can read reviews and doctor profiles before booking an appointment.
			  It's free and will always be</p>
              <p><a class="btn btn-lg btn-primary" href="patientsignup.php" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
		<div class="item ">
          <img src="images/steth.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption blackfont">
              <h1>Are you a doctor?</h1>
              <p>Join us and deliver better healthcare to your patients.All you need is to signup using your <code>medical license id</code>.Let new patients find you and book appointments instantly</p>
              <p><a class="btn btn-lg btn-primary" href="doctorsignup.php" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        
        <div class="item">
          <img id="thirdimg" src="images/typesofdocs1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption slide2">
              <h1>Search based on specializations</h1>
              <p>Its all about finding the right doctor.We help you search for doctors not only based on their locality but also based on their specialization.</p>
              <p><a class="btn btn-lg btn-primary" href="signuplanding.php" role="button">Know more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--   
   <script src="../../assets/js/docs.min.js"></script>
     IE10 viewport hack for Surface/desktop Windows 8 bug
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
	
  </body>
</html>

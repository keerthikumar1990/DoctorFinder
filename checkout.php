<?php
session_start();
	include("connection.php"); 
	if($_GET['date'] && $_GET['time'])
	{
		date_default_timezone_set('America/Chicago');
		$appointmentDate = new DateTime($_GET['date']);
		$appointmentDate= date_format($appointmentDate,'F j,Y');
		$appointmentDate = $appointmentDate." ".$_GET['time'];
	
	
	}
	
	mysqli_close($link);
	?>

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
		.marginBook{
		margin-left:100px;
		padding-top:40px;
		
		margin-bottom:-10px;
		}
		.marginTime{
			margin-bottom:10px;
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
          
      
        </nav>

		<div class ="container" id ="topContainer">
			<div id ="subContentContainer" class="subContainer1">
		
			 <div  class="row"> 
			<h3  class="marginTop lead marginBook">Book Your Appointment</h3> 
			<div id="createspecificScheduleMsg" style="display:none">
							 
											</div>
                     <div  class="col-md-9  col-md-offset-3"  id="topRow"> 
							
							 
							 <hr>
							
													 
							 <form  id="appointmentForm" class="marginTop" method = "post"> 
											
											
										  <div  class="form-group "> 
													<label for="reason">Illness Description</label>
													<input type="text" name ="reason" id="reason" class="form-control" placeholder="Reason for visit" value = "<?php echo addslashes($_POST['reason']); ?>" /> 
														 
										  </div> 
										  <div  class="form-group "> 
													<label class="marginTime" >Appointment Time</label>
													<input type="hidden" name="date" value="<?php echo $_GET['date'] ?>" />
													<input type="hidden" name="time" value="<?php echo $_GET['time'] ?>">
													<input type="hidden" name="pid" value="<?php echo $_SESSION['pid'] ?>" />
													<input type="hidden" name="did" value="<?php echo $_GET['doctId'] ?>">
													
													<p style="color:#55A8B8; font-weight:bold;"><?php echo $appointmentDate; ?> <span class="glyphicon glyphicon-calendar"></span></p>
										  </div> 
										
										  <input type="submit" name ="appconfirm" id ="appconfirm" value ="Click here to book slot" class="btn btn-primary btn-lg margintop marginbottom marginleftpush" /> 
								
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
		$(".subContainer1").css("max-width","1000px");
		$(".subContainer2").css("max-width","40%");
		
	$("#appointmentForm").submit(function(event) {
    event.preventDefault();
	
	var $form = $(this);
	var dataser = $form.serialize();
	//alert(dataser);
        $.ajax({
			type:'POST',
            url: 'bookappointment.php',
            data: dataser,
            cache: false,
			success:function(data){
					//alert("success");
					$("#createspecificScheduleMsg").html(data).show(1000);
			}
        });
	
	
});

            });
        </script>
  </body>
</html>


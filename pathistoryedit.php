<?php

session_start();
include("connection.php");
	$temp = $_SESSION['pid'];
        $row = $mysqli->query("SELECT * FROM patient_history WHERE pid = '".$temp."'")->fetch_array();

?>
<?php

session_start();
include 'connection.php';
if (isset($_POST['pupdate']))
 {
	
	// set parameters and execute
	$illness = $_POST['illness']; 

	$start_date = $_POST['start_date']; 
	$end_date = $_POST['end_date'];
	$treated_by = $_POST['treated_by'];
	$course_of_treatment = $_POST['course_of_treatment'];
	$sql = "INSERT INTO patient_history(pid, illness,start_date,end_date,treated_by,course_of_treatment) values ('".$temp."','$illness','$start_date', '$end_date', '$treated_by', '$course_of_treatment')";

	if ($link->query($sql) === TRUE) {
            
		header('Location: patientprofile.php');
                exit();
	} else {
		echo "Error updating record: " . $link->error;
	}
	
	$link->close();
	
 }
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.min.css" />
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
			background-color:#F5F5F5;
			background-size:cover;
			margin-top:-20px;
			
		}
		.navbar{
			background-color:white;
		}
		
		.subContainer1{
			
		
			/*border-right: 1px solid black;
			border-top:0px;
			border-left:0px;
			border-bottom:0px;
			
			*/
			background-color:#EBF4F6
		}
		
		.pullleft{
			margin-left:-14px;
			
		}
		.marginleftspeciality{
			margin-left:110px;
		}
		.marginsearch{
			margin-top:30px;
			margin-left:130px;
			margin-right:10px;
		}
		
		.subContainer2{
			background-color:white;
			
		}
		.clearfloat{
			clear:both;
		}
		.marginleftsearch{
			margin-left:210px;
			margin-bottom:20px;
		}
                .histlabel{
			padding:50px;
			margin-right:250px;
                        margin-right:250px;
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
              <a class="navbar-brand" href="#"><span class="alignbrand"> D</span><span class="glyphicon glyphicon-plus-sign"></span><span class="alignbrand">ct</span><span class="glyphicon glyphicon-plus-sign"></span><span class="alignbrand">r Finder</span></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse ">
              <ul class="nav navbar-nav pull-right ">
			  
                  <li><span class="rightnav"> <a href="index.php?logout=1">Log out</a></span></li>
              
              </ul>
            </div>
          
        </nav>
		<div class ="container" id ="topContainer">
			<div id ="subContentContainer" class="subContainer1">
		
			 <div  class="row"> 
							 <form id="patientLoginForm" class="marginTop" method="post" action="pathistoryedit.php" name="pupdate"> 
						 <div id="searchFormMsg" style="display:none">
							 
							 </div>
                    
                                                                                  
                                                                                  <div  class="col-md-6  col-md-offset-3"  id="topRow"> </div>
							 
							 
							 <hr>
                                                         
							 <div class="histlabel"><h1 class="lead" ><span class="glyphicon glyphicon-list-alt"></span> Patient History</h1></div>
							 <div  class="form-group col-sm-4 marginleft pullleft "> 
													<label for="First Name"> Illness</label>
													<input type="text" size="250" id="patientfname" name ="illness" class="form-control" value = "" /> 
														 
										  </div> 
							  <div  class="form-group col-sm-4 marginleft pullleft "> 
													<label for="citysearch">Start Date</label>
													<input type="text" size="250" id="patientlname" name ="start_date" class="form-control" value=""/> 
														 
										  </div> 
							  <div  class="form-group col-sm-4 marginleft pullleft "> 
													<label for="citysearch">End Date</label>
													<input type="text" size="250" id="phone" name ="end_date" class="form-control" value="" /> 
														 
										  </div> 
							  <div  class="form-group col-sm-4 marginleft pullleft "> 
													<label for="citysearch">Treated by</label>
													<input type="text" size="250" id="country" name ="treated_by" class="form-control" value="" /> 
														 
										  </div> 
					
                                                         <div  class="form-group col-sm-12 marginleft pullleft "> 
													<label for="citysearch">Recommended Treatment</label>
													<textarea name="course_of_treatment">Recommended Treatment</textarea>
														 
										  </div> 
					
                                                        
                                                                                  
                                                        
             
                                          
										<div class="clearfloat"></div>
							<input type="submit" name="pupdate" id="pupdate" value ="Update" class="btn btn-primary btn-md marginTop marginleftsearch"  /> 
                     </div> 
			</div> 
			</form>	
			</div>
			
		
		</div>
		
		<div id="tableMsg" style="display:none"></div>

     <div id ="subContentContainer" class="subContainer2">
		
			 <div  class="row"> 
					
                     <div  class="col-md-9 col-md-offset-3"  id="seconddiv"> 
							
					</div>
			</div>
			</div>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="moment-develop/moment.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script>
		
		//$("#topContainer").css("min-height",$(window).height());
		$(".subContainer2").css("min-height",$(window).height());
		$(".subContainer2").css("min-width","100%");
		
                
                $(".form-control").onclick(function(){
                    $(".form-control").value="";
                })
		$("#searchform").submit(function(event) {
			event.preventDefault();
			
			var $form = $(this);
			var dataser = $form.serialize();
			
				$.ajax({
					type:'POST',
					url: 'doctorsearch.php',
					data: dataser,
					cache: false,
					success:function(data){
							
							var str = data;
							var n = str.search("danger");
							
							if(n>0)
							{
								$("#searchFormMsg").html(data).show(1000);
							}else{
							$("#tableMsg").html(data).show(1000);
							
							 $('html,body').animate({
							scrollTop: $("#tableContainer").offset().top -150},1500);}
					}
					
				});
			});
		
	</script>
	
	
  </body>
</html>

<?php
session_start();

include("connection.php");
	require_once("db_const.php");
	//$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$temp = $_SESSION['id'];

	$query = "select languages,professional_statement,acknowledgements,education,hospital from doctor_profile
														  where doc_id = '".$temp."' ";
$query1 = "select field from specialization where license_no = '".$temp."' ";

$a= mysqli_query($link,$query);
$b = mysqli_num_rows($a);
	$c= mysqli_query($link,$query1);
$d = mysqli_num_rows($c);
	
	$result = mysqli_fetch_array($a);
	$result1 = mysqli_fetch_array($c);
	/*
	$result = $mysqli->query("select languages,professional_statement,acknowledgements,education,hospital from doctor_profile
														  where doc_id = '181900' ")->fetch_array();
        $result1 = $mysqli->query("select field from specialization where license_no = '181900' ")->fetch_array();
*/
        ?>
<?php
include 'connection.php';
if (isset($_POST['pupdate']))
 {
	
	// set parameters and execute
	$languages = $_POST['languages']; 
	$professional_statement = $_POST['professional_statement']; 
	$acknowledgements = $_POST['acknowledgements'];
	$education = $_POST['education'];
	$hospital = $_POST['hospital'];
        $field = $_POST['field'];
	$sql = "UPDATE doctor_profile SET languages= '$languages', professional_statement= '$professional_statement', acknowledgements= '$acknowledgements', education= '$education', hospital= '$hospital' where doc_id='".$temp."'";
	$sql1 = "UPDATE specialization SET field= '$field' where license_no='".$temp."'";

	if (($link->query($sql) === TRUE) and ($link->query($sql1) === TRUE)){
		header('Location: doctorprofile.php');
	} 
        
	$link->close();
	
 }

//include 'connection.php';
//if (isset($_POST['pupdate']))
// {
//	
//	// set parameters and execute
//	$password = $_POST['password']; 
//	$patientfname = $_POST['patientfname']; 
//	$patientlname = $_POST['patientlname'];
//	$phone = $_POST['phone'];
//	$country = $_POST['country'];
//	$insuranceid = $_POST['insuranceid'];
//	$address = $_POST['address'];
//	$sql = "UPDATE patient_details SET firstname= '$patientfname', lastname= '$patientlname', password= '$password', address= '$address', phone= '$phone', country_code= '$country', insurance_id= '$insuranceid' WHERE patient_id = '$temp'";
//

	
	
 
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
			  
                <li><span class="rightnav">Welcome <?php echo $_SESSION['fname'];?> | <a href="doceditprof.php">Edit Profile </a>| <a href="logout.php">Log out</a></span></li>
              
              </ul>
            </div>
          
        </nav>
		<div class ="container" id ="topContainer">
			<div id ="subContentContainer" class="subContainer1">
		
			 <div  class="row"> 
							 <form id="patientLoginForm" class="marginTop" method="post" action="doceditprof.php" name="pupdate"> 
						 <div id="searchFormMsg" style="display:none">
							 
							 </div>
                    <div  class="form-group col-sm-12 marginleft pullleft "> 
													<label for="professional_statement">Professional Statement</label>
													<div  class="col-md-12 col-md-offset-1 avail">	<textarea width="750px" name="professional_statement"><?php echo $result['professional_statement']; ?></textarea>
                                                                                                        </div>			 
										  </div> 
                                                         
							 <div  class="form-group col-sm-4 marginleft pullleft "> 
													<label for="field"> field</label>
													<input type="text" size="250" id="patientfname" name ="field" class="form-control" value = "<?php echo $result1['field']; ?>" /> 
														 
										  </div> 
							  <div  class="form-group col-sm-4 marginleft pullleft "> 
													<label for="hospital">hospital</label>
													<input type="text" width="250" id="patientlname" name ="hospital" class="form-control" value="<?php echo $result['hospital']; ?>"/> 
														 
										  </div> 
							  <div  class="form-group col-sm-4 marginleft pullleft "> 
													<label for="education">education</label>
													<input type="text" size="250" id="education" name ="education" class="form-control" value="<?php echo $result['education']; ?>" /> 
														 
										  </div> 
							  <div  class="form-group col-sm-4 marginleft pullleft "> 
													<label for="acknowledgements">Acknowledgements</label>
													<input type="text" size="250" id="acknowledgements" name ="acknowledgements" class="form-control" value="<?php echo $result['acknowledgements']; ?>" /> 
														 
										  </div> 
							  <div  class="form-group col-sm-4 marginleft pullleft "> 
													<label for="languages">languages</label>
													<input type="text" size="250" id="languages" name ="languages" class="form-control" value="<?php echo $result['languages']; ?>" /> 
														 
										  </div> 
					
                                                        
                                                                                  
                                                        
             
                                          
										<div class="clearfloat"></div>
							<input type="submit" name="pupdate" id="pupdate" value ="Update" class="btn btn-primary btn-md marginTop marginleftsearch"  /> 
                                                         </form>
                     </div> 
			</div> 
				
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
		
		/*$("#searchform").submit(function(event) {
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
			});*/
		
	</script>

	
  </body>
</html>

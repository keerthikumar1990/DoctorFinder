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
		.marginleftpush{
			margin-left:60px;
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
			margin-top:40px;
		}
		.marginleft{
			margin-left:-14px;
			
		}
		.paddingtop{
			padding-top:14px;
			
		}
		.margintop{
			margin-top:14px;
			
		}
		.marginbottom{
			margin-bottom:20px;
			
		}
		.clearfloat{
			clear:both;
		}
		#welcomeimg{
			margin-top:200px;
			width:300px;
			height:300px;
		}
		.circlestyle{
			width: 140px;
			height: 140px; 
			background-color:#55A8B8;
			margin-left:100px;
		}
		.glyphicon-calendar{
			font-size:60px;
			margin-top:40px;
			color:white;
		}
		.glyphicon-edit{
			font-size:60px;
			margin-top:40px;
			color:white;
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
				   <li><a href="patientsignup.php"><span class="rightnav">Are you a patient?SignUp here</span></a></li>
                 
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
							 <form  id="docLoginForm" class="marginTop" method = "post"> 

									 <div  class="form-group col-md-6 marginleft "> 

														<label for="docfname">First Name</label>
													   <input type="text" size="30" id="docfname" name ="docfname" class="form-control" placeholder="First name"  value = "<?php echo addslashes($_POST['docfname']); ?>"/> 
														 
										  </div> 
										 <div  class="form-group col-md-6 marginleft "> 
													<label for="doclname">Last Name</label>
													<input type="text" size="30" id="doclname" name ="doclname" class="form-control" placeholder="Last name" value = "<?php echo addslashes($_POST['doclname']); ?>" /> 
														 
										  </div> 
										  <div  class="form-group "> 
													<label for="docemail">Email</label>
													<input type="email" name ="docemail" id="docemail" class="form-control" placeholder="Enter Your email" value = "<?php echo addslashes($_POST['docemail']); ?>" /> 
														 
										  </div> 
										  <div  class="form-group "> 
													<label for="confirmdocemail">Confirm Email</label>
													<input type="email" name ="confirmdocemail" id="confirmdocemail" class="form-control" placeholder="Confirm your email" value = "<?php echo addslashes($_POST['confirmdocemail']); ?>" /> 
														 
										  </div> 
										<div  class="form-group"> 
															<label for="docloginpassword">Create a Password(Atleast 6 Characters)</label>
                                                            <input  type="password" id="docloginpassword" name ="docloginpassword" placeholder="Enter a Password" class="form-control" value = "<?php echo addslashes($_POST['docloginpassword']); ?>"/> 

                                         </div>
										<div  class="form-group"> 
													<label for="docId">Medical practitioner Id (For Validation)</label>
													<input type="text" size="250" id="docId" name ="docId" class="form-control" placeholder="Last name" value = "<?php echo addslashes($_POST['docId']); ?>" /> 
														 
										  </div> 
										  <div  class="form-group " id ="specialitydropdown"> 
										  <label for="lname">Speciality</label>
										 <select id="specialization" name="specialization" class="form-control">
										 <option value="">- Select your specialty -</option>
													<option value="345">Acupuncturist</option>
													<option value="132">Allergist</option>
													<option value="145">Anesthesiologist</option>
													<option value="346">Audiologist</option>
													<option value="364">Bariatric Physician</option>
													<option value="112">Cardiac Electrophysiologist</option>
													<option value="105">Cardiologist</option>
													<option value="143">Cardiothoracic Surgeon</option>
													<option value="156">Chiropractor</option>
													<option value="133">Colorectal Surgeon</option>
													<option value="98">Dentist</option>
													<option value="101">Dermatologist</option>
													<option value="359">Dietitian</option>
													<option value="130">Ear, Nose , Throat Doctor</option>
													<option value="146">Emergency Medicine Physician</option>
													<option value="127">Endocrinologist</option>
													<option value="134">Endodontist</option>
													<option value="102">Family Physician</option>
													<option value="106">Gastroenterologist</option>
													<option value="148">Geneticist</option>
													<option value="144">Hand Surgeon</option>
													<option value="110">Hematologist</option>
													<option value="154">Immunologist</option>
													<option value="114">Infectious Disease Specialist</option>
													<option value="99">Internist</option>
													<option value="354">Medical Ethicist</option>
													<option value="159">Microbiologist</option>
													<option value="362">Midwife</option>
													<option value="373">Naturopathic Doctor</option>
													<option value="107">Nephrologist</option>
													<option value="128">Neurologist</option>
													<option value="383">Neuropsychiatrist</option>
													<option value="113">Neurosurgeon</option>
													<option value="349">Nurse Practitioner</option>
													<option value="384">Nutritionist</option>
													<option value="104">OB-GYN</option>
													<option value="357">Occupational Medicine Specialist</option>
													<option value="111">Oncologist</option>
													<option value="116">Ophthalmologist</option>
													<option value="157">Optometrist</option>
													<option value="151">Oral Surgeon</option>
													<option value="135">Orthodontist</option>
													<option value="117">Orthopedic Surgeon</option>
													<option value="139">Pain Management Specialist</option>
													<option value="118">Pathologist</option>
													<option value="152">Pediatric Dentist</option>
													<option value="100">Pediatrician</option>
													<option value="136">Periodontist</option>
													<option value="336">Physiatrist</option>
													<option value="335">Physical Therapist</option>
													<option value="120">Plastic Surgeon</option>
													<option value="121">Podiatrist</option>
													<option value="344">Preventive Medicine Specialist</option>
													<option value="153">Primary Care Doctor</option>
													<option value="137">Prosthodontist</option>
													<option value="122">Psychiatrist</option>
													<option value="337">Psychologist</option>
													<option value="299">Psychosomatic Medicine Specialist</option>
													<option value="352">Psychotherapist</option>
													<option value="108">Pulmonologist</option>
													<option value="124">Radiation Oncologist</option>
													<option value="123">Radiologist</option>
													<option value="339">Reproductive Endocrinologist</option>
													<option value="109">Rheumatologist</option>
													<option value="155">Sleep Medicine Specialist</option>
													<option value="129">Sports Medicine Specialist</option>
													<option value="158">Surgeon</option>
													<option value="343">Travel Medicine Specialist</option>
													<option value="382">Urgent Care Doctor</option>
													<option value="408">Urological Surgeon</option>
													<option value="126">Urologist</option>
													<option value="142">Vascular Surgeon</option>

										</select>
										</div>
										
										   <div  class="form-group"> 
													<label for="docaddress">Office Address</label>
													<textarea  name ="docaddress" id="docaddress" class="form-control" placeholder="Patients will be intimated with this address for their appointment" value = "<?php echo addslashes($_POST['docaddress']); ?>" ></textarea> 
									
										  </div> 
										   <div  class="form-group col-md-6 marginleft"> 

														<label for="city">City</label>
													   <input type="text" name ="city" id="city" class="form-control" placeholder="Enter the city"  value = "<?php echo addslashes($_POST['city']); ?>"/> 
														 
										  </div> 
										  <div  class="form-group col-md-6 marginleft"> 
													<label for="state">State</label>
													<select id="state" name="state" class="form-control">
																			<option value="">-Select-</option>
																			<option value="AL">Alabama</option>
																			<option value="AK">Alaska</option>
																			<option value="AZ">Arizona</option>
																			<option value="AR">Arkansas</option>
																			<option value="CA">California</option>
																			<option value="CO">Colorado</option>
																			<option value="CT">Connecticut</option>
																			<option value="DE">Delaware</option>
																			<option value="DC">District Of Columbia</option>
																			<option value="FL">Florida</option>
																			<option value="GA">Georgia</option>
																			<option value="HI">Hawaii</option>
																			<option value="ID">Idaho</option>
																			<option value="IL">Illinois</option>
																			<option value="IN">Indiana</option>
																			<option value="IA">Iowa</option>
																			<option value="KS">Kansas</option>
																			<option value="KY">Kentucky</option>
																			<option value="LA">Louisiana</option>
																			<option value="ME">Maine</option>
																			<option value="MD">Maryland</option>
																			<option value="MA">Massachusetts</option>
																			<option value="MI">Michigan</option>
																			<option value="MN">Minnesota</option>
																			<option value="MS">Mississippi</option>
																			<option value="MO">Missouri</option>
																			<option value="MT">Montana</option>
																			<option value="NE">Nebraska</option>
																			<option value="NV">Nevada</option>
																			<option value="NH">New Hampshire</option>
																			<option value="NJ">New Jersey</option>
																			<option value="NM">New Mexico</option>
																			<option value="NY">New York</option>
																			<option value="NC">North Carolina</option>
																			<option value="ND">North Dakota</option>
																			<option value="OH">Ohio</option>
																			<option value="OK">Oklahoma</option>
																			<option value="OR">Oregon</option>
																			<option value="PA">Pennsylvania</option>
																			<option value="RI">Rhode Island</option>
																			<option value="SC">South Carolina</option>
																			<option value="SD">South Dakota</option>
																			<option value="TN">Tennessee</option>
																			<option value="TX">Texas</option>
																			<option value="UT">Utah</option>
																			<option value="VT">Vermont</option>
																			<option value="VA">Virginia</option>
																			<option value="WA">Washington</option>
																			<option value="WV">West Virginia</option>
																			<option value="WI">Wisconsin</option>
																			<option value="WY">Wyoming</option>
													</select>				
					 
										  </div> 
										  <div  class="form-group col-md-6 marginleft "> 
													<label for="docZipCode">Practice Zip Code</label>
													<input type="text" size="250" id="docZipCode" name ="docZipCode" class="form-control" placeholder="Last name" value = "<?php echo addslashes($_POST['docZipCode']); ?>" /> 
														 
										  </div> 
										  
										  
										  <input type="submit" name ="submit" id ="submit" value ="Sign Up" class="btn btn-primary btn-lg margintop marginbottom marginleftpush" /> 
							
								
							 </form>
                     </div> 
					 
					 
        </div> 
		
			</div>
			<div id ="subImgContainer" class="subContainer2">
				
				 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

					<div class="container marketing">

					  <!-- Three columns of text below the carousel -->
					  
					  <div class="row">
						<div class="col-lg-4">
						 <div class="img-circle circlestyle" ><span class="glyphicon glyphicon-calendar"></span></div>
						  <h2>24 x 7 appointments booking</h2>
						  <p>Patients can book appointments round the clock,even when your office is closed.</p>
						  <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
						</div><!-- /.col-lg-4 -->
						</div>
						<div class="row">
						<div class="col-lg-4 ">
						
						   <div class="img-circle circlestyle" ><span class="glyphicon glyphicon-edit"></span></div>
						 <h2>Manage your Availabilty with ease</h2>
						  <p>You can schedule your availabilty for the next 2 weeks and you can alter them any time in your profile.</p>
						  <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
						</div><!-- /.col-lg-4 -->
						</div>
						</div>
								
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
		$(".subContainer1").css("max-width","60%");
		$(".subContainer2").css("max-width","40%");
		
		
            });
        </script>
  </body>
</html>

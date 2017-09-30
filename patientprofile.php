<?
session_start();
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
		.insidecontent{
			margin-left:10px;
		}
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
		td{
			width:100px;
			height:100px;
			padding:15px;
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
			  
                <li><a href="index.php?logout=1"><span class="rightnav">Log out</span></a></li>
              
              </ul>
            </div>
          
        </nav>
		<div class ="container" id ="topContainer">
			<div id ="subContentContainer" class="subContainer1">
		
			 <div  class="row"> 
					<form  id="searchform" class="marginTop" method = "post"> 
						 <div id="searchFormMsg" style="display:none">
							 
							 </div>
                     <div  class="col-md-6  col-md-offset-3"  id="topRow"> 
							 
							 <label class="marginsearch"><span class="glyphicon glyphicon-search"></span>Search by speciality/Locations</label> 
							 <hr>
							 
							 <div  class="form-group col-sm-4 marginleft pullleft "> 
													<label for="docZipCode">Practice Zip Code</label>
													<input type="text" size="250" id="docZipCode" name ="docZipCode" class="form-control" placeholder="zipcode" value = "<?php echo addslashes($_POST['docZipCode']); ?>" /> 
														 
										  </div> 
							  <div  class="form-group col-sm-4 marginleft pullleft "> 
													<label for="citysearch">City</label>
													<input type="text" size="250" id="citysearch" name ="citysearch" class="form-control" placeholder="City" value = "<?php echo addslashes($_POST['citysearch']); ?>" /> 
														 
										  </div> 
							 <div  class="form-group col-sm-4 marginleft pullleft"> 
													<label for="state">State</label>
													<select class="form-control" name="state" id="state">
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
							  <div  class="form-group  col-sm-6 col-offset-9 marginleftspeciality" > 
										  <label for="lname">Speciality</label>
										 <select class="form-control"  name="specialitydropdown" id ="specialitydropdown">
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
										<div class="clearfloat"></div>
							<input type="submit" name ="doctorsearch" id ="doctorsearch" value ="Search" class="btn btn-primary btn-md marginTop marginleftsearch"  /> 
					
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
							scrollTop: $("#tableContainer").offset().top},1500);}
					}
					
				});
			});
		
		
$('body').on('click', '.clickeventclass', function (e) {
    
    e.preventDefault();
			var docId = $(this).attr('id');
			//alert(docId);
			
			location.href = "doctorprofile.php?getdocId="+docId;
			
		
		
		return false; 
			
				
				
});
	</script>
	
	
  </body>
</html>

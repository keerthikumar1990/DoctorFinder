<?session_start();?>
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
		
		.marginleft75{
			margin-left:75px;
			
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
		.margintop20{
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
		#topRow{
			margin-top:30px;
		}
		.floatright{
			float:right;
		}
		.marginleft100{
			margin-left:500px;
		}
		 
	
		table{
		display:block;
		height:300px;
		width:1000px;
		overflow:auto;
		}
		
		#schedulesub{
			margin-left:-340px;
			margin-top:100px;
			
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
			  
                <li><a href="index.php?logout=1"><span class="rightnav">Log out</span></a></li>
              
			  
              </ul>
            </div>
      
      
        </nav>

		<div class ="container" id ="topContainer">
			<div id ="subContentContainer" class="subContainer1">
		
			 <div  class="row"> 

                     <div  class="col-md-12"  id="topRow"> 
							 <h1  class="marginTop">Work Plan</h1> 
							 
							 <hr/>
							
							 <div id="createScheduleMsg" style="display:none">
							 
							 </div>
						 
							 <form  id="availForm1" class="marginTop" method = "post"> 

										  
										
										 <p>Do you have a uniform work hour pattern ? If yes ,then use the below form else click here </p>
										 
										 <p  class="lead margintop20">Schedule availability</p>
										 
										<div class="form-group col-md-6">
													<label for="title">From</label>
														<div class='input-group date datepicker' >

															<input type='text' id="from1" name ="from1" class="form-control" readonly data-date-format="MM/DD/YYYY" placeholder="MM/DD/YYYY" />
															<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
															</span>
														</div>
										</div>
												
										<div class="form-group col-md-6">
													<label for="title">To</label>
														<div class='input-group date datepicker' >

															<input type='text' id="to1" name="to1" class="form-control" readonly data-date-format="MM/DD/YYYY" placeholder="MM/DD/YYYY" />
															<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
															</span>
														</div>
										</div>
										<p class="lead margintop20">On all these days,</p>
										<div class="form-group col-md-3 ">
													<label for="title">I  work from </label>
														<div class='input-group date timepicker' >

															<input type='text' id="fromtime1" name ="fromtime1" class="form-control" readonly  />
															<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
															</span>
														</div>
										</div>
										<div class="form-group col-md-3">
													<label for="title">To</label>
														<div class='input-group date timepicker'>

															<input type='text' id="totime1" name="totime1" class="form-control" readonly  />
															<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
															</span>
														</div>
										</div>
										
										  <center><input type="submit" name ="schedulesub" id ="schedulesub" value ="Schedule" class="btn btn-primary btn-md margintop  marginbottom" /> 
										</center>
							 </form>
								<hr/>
								 <h1  class="margintop20">Plan on specific dates</h1> 
							 
							 <hr/>
							 	 <form  id="availform2" class="marginTop" method = "post"> 

										  
										
										 <p>Do You wish to schedule you availabily on specific dates?Please use the below form</p>
										 <p class="lead">Schedule availability</p>
										  <div id="createspecificScheduleMsg" style="display:none">
							 
											</div>
										 
										<div class="form-group col-md-4 ">
													<label for="title">On</label>
														<div class='input-group date datepicker' >

															<input type='text' id="specificdate" name="specificdate" class="form-control" data-date-format="MM/DD/YYYY" readonly />
															<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
															</span>
														</div>
										</div>
										
										
										<div class="form-group col-md-3">
													<label for="title">I Work from</label>
														<div class='input-group date timepicker'>

															<input type='text' id="fromtimespecific" name="fromtimespecific" class="form-control" readonly />
															<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
															</span>
														</div>
										</div>
										<div class="form-group col-md-3">
													<label for="title">To</label>
														<div class='input-group date timepicker'>

															<input type='text' id="totimespecific" name="totimespecific" class="form-control"  readonly />
															<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
															</span>
														</div>
										</div>
										
										<div class="container col-md-6 col-md-offset-3"><center>  <input type="submit" name ="schedulespecific" id ="schedulespecific" value ="Schedule" class="btn btn-primary btn-md margintop marginbottom marginleft35" /> 
										</center></div>
							 </form>
                     </div> 
					 
					
							
        </div> 
		
			</div>
			<div id ="subImgContainer" class="subContainer2 marginleft75">
				
				<img id="welcomeimg" src ="images/cal.jpg" />
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
                $('.datepicker').datetimepicker({
					pickTime: false
				});
				
				$('.timepicker').datetimepicker({
					pickDate: false
				});
			
				
		$("#topContainer").css("min-height",$(window).height());
		$(".subContainer1").css("min-height",$(window).height()-150);
		$(".subContainer2").css("min-height",$(window).height()-150);
		$(".subContainer1").css("max-width","60%");
		$(".subContainer2").css("max-width","40%");
		
		
			$("#availform2").submit(function(event) {
    event.preventDefault();
	
	var $form = $(this);
	var dataser = $form.serialize();
	//alert(dataser);
        $.ajax({
			type:'POST',
            url: 'createspecificschedule.php',
            data: dataser,
            cache: false,
			success:function(data){
					//alert("success");
					$("#createspecificScheduleMsg").html(data).show(1000);
			}
        });
	
	
});
		$("#availForm1").submit(function(event) {
    event.preventDefault();
	
	var $form = $(this);
	var dataser = $form.serialize();
	//alert(dataser);
        $.ajax({
			type:'POST',
            url: 'createschedule.php',
            data: dataser,
            cache: false,
			success:function(data){
					//alert("success");
					$("#createScheduleMsg").html(data).show(1000);
			}
        });
	
	
});
		$("#fineupdatelink").click(function(e) {
    
		e.preventDefault();
	
			 $.ajax({
					type:'POST',
					url: 'availabilitygrid.php',
					cache: false,
					success:function(data){
							$("#fineMsgUpdate").html(data).show(1000);	
					}
					
				});
});
		
            });
			
			
        </script>
  </body>
</html>

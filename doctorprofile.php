
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
			position:relative;
			
			height:250px;
			margin-left:95px;
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
			
		
			margin-top:15px;
			margin-left:95px;
			background-color:#EBF4F6
			
		}
		.clearfloat{
			clear:both;
		}
		.marginleftsearch{
			margin-left:210px;
			margin-bottom:20px;
			
		}
		
		table{
		display:block;
		height:300px;
		width:1000px;
		overflow:auto;
		}
		.marginforcontent{
		margin-left:20px;
		}
		.coutContainer  { 

                background-color:#EBF4F6; 

                width:500px; 

                background-size:cover; 
				margin-top:20px;
				
				
                }
		.imgcontainer{
			width:200px;
			height:200px;
			margin-top:25px;
			margin-left:40px;
			background-color:white;
			border-radius:5px;
		}
		
		.upload-file-container{
			width:105px;
			
			margin-left:33px;
		}
		#piclabel{
			margin-top:60px;
			margin-left:27px;
		}
		#contentCont
		{
			background-color:white;
			width:500px;
			height:200px;
			margin-top:-214px;
			border-radius:5px;
			background-color:#EBF4F6;
			
		}
		#scroll{
			background-color:#EBF4F6;
		}
		.histlabel{
			padding-Top:20px;
			margin-left:450px;
		}
		#dataTable{
			margin-left:100px;
		}
		.marginTop{
			margin-top:20px;
		}

	</style>
  </head>
<!-- NAVBAR
================================================== -->


	<?php
	session_start();
	if($_GET['getdocId']){
		$doctorId = $_GET['getdocId'];
		//echo "Id from link";
	}else if($_SESSION['id']){
		$doctorId = $_SESSION['id'];
		//echo "Id from session";
	}
	//echo "------>".$doctorId;
	$imageflag = 0;
	include("connection.php");
if($_POST['imgsubmit']){

  move_uploaded_file($_FILES['imagefile']['tmp_name'],"latest.img");
        $instr = fopen("latest.img","rb");
        $image = addslashes(fread($instr,filesize("latest.img")));
			$query="UPDATE `doctor_details` SET `docimage` ='".$image."' where license_num='".$doctorId."'";
			$result = mysqli_query($link,$query);
			if($result){
				$query = "select docimage from doctor_details  where license_num ='".$doctorId."'";
				$result = mysqli_query($link,$query);
				$results = mysqli_num_rows($result);
				$row = mysqli_fetch_array($result);
				$img = base64_encode($row['docimage']);
				$imageflag =1;
				}	
			
	}
	$query = "select length(docimage) as length,docimage from doctor_details where license_num ='".$doctorId."'";
				$result = mysqli_query($link,$query);
				$results = mysqli_num_rows($result);
				if($result){
					$row = mysqli_fetch_array($result);
					if($row['length']>0){
					$img = base64_encode($row['docimage']);
					$imageflag =1;
					}
					
				}
	
?>
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
		<div id ="subContentContainer" class="subContainer1">
		
				<div  class="row">
					<div class="imgcontainer form-group">
						 <?if($imageflag ==1){
								echo "<div><img style='width:200px;height:200px'src="."data:image/png;base64,".$img."></div>";
						}else{
								if($_SESSION['id']){
								echo '<div class="container " id="upload-file-container">
								<form  method="POST"  id="imageform" enctype="multipart/form-data">
									<label id="piclabel" for="imagefile">Upload profile pic</label>
									<input type="file" id="imagefile" class="upload-file-container btn btn-default btn-sm" name="imagefile" />
									<input type="submit" id="imgsubmit" name="imgsubmit" class="upload-file-container btn btn-primary btn-sm" />
									
								</form>
								 
								</div>';
								
								}
						}
						?> 
						
						
					</div>
					
				</div>
				
				
				<div id="nametag" style="display:none;"></div>
				
					<?if($_SESSION['id']){
					echo '<a href="availscheduling.php" class="pull-right btn btn-primary btn-sm" >work plan scheduler</a>';
					}?>
				
				
			 </div>
			
		
</div> 
			<div  class="container  coutContainer marginTop paddingBottom"  id="coutContainer"> 
        <div  class="row"> 

                     <div  class="col-md-6  col-md-offset-1 "  id="topRow"> 
							<div id="fetchdoc">
							</div>
						 <?if($_SESSION['id']){	
						 echo '<p  class="lead marginTop" ><span class="glyphicon glyphicon-briefcase"></span>Use work planner to see your schedule below</p>';
						 }else{
						echo '<p  class="lead marginTop" ><span class="glyphicon glyphicon-briefcase"></span>  Check Availability And Book Slot</p>';
						
						}
						
						
						?>
                     </div> 
					 	<div  class="col-md-12 col-md-offset-1 avail">					
						<div id ="fineMsgUpdate" style="display:none"></div>
					 		
					 </div>
					
							
					  <div class ="col-md-12 col-md-offset-1 container">
							
							<?if($_SESSION['id']){
							  echo'<p  class="lead marginTop" ><span class="glyphicon glyphicon-briefcase"></span>Appointment Details</p>
							 <div id ="appointmentconifrmmsg" style="display:none;"></div>
							 <div id ="appointUpdate"></div>
							
							 ';
							}?>
							
					</div>
							
					 <div class ="col-md-12 col-md-offset-1 container">
							<p  class="lead marginTop" ><span class="glyphicon glyphicon-briefcase"></span>  Patient Reviews</p>
							</div>
        </div> 	
     
</div>



 </div>
 <!--
 <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</a>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<script src="jquery-handsontable-master/jquery-handsontable-master/dist/jquery.handsontable.full.js"></script>

<link rel="stylesheet" media="screen" href="jquery-handsontable-master/jquery-handsontable-master/dist/jquery.handsontable.full.css">
	<script type="text/javascript" src="moment-develop/moment.js"></script>
	<script type="text/javascript" src="star-rating/jquery.rating.pack.js"></script>
	<link rel="stylesheet" media="screen" href="star-rating/jquery.rating.css">
	
	
	 
	<script>
		
		//$("#topContainer").css("min-height",$(window).height());
		$(document).ready(function(){
		$(".subContainer1").css("max-width",$(window).width()-200);
		$(".subContainer2").css("min-height",$(window).height());
		$(".subContainer2").css("max-width",$(window).width()-215);
		$("#scroll").css("min-height",$(window).height());
		$(".coutContainer").css("min-height",$(window).height()); 
		$(".coutContainer").css("min-width",$(window).width()-200);
		
				 $('.hover-star').rating({
		  focus: function(value, link){
			// 'this' is the hidden form element holding the current value
			// 'value' is the value selected
			// 'element' points to the link element that received the click.
			var tip = $('#hover-test');
			tip[0].data = tip[0].data || tip.html();
			tip.html(link.title || 'value: '+value);
		  },
		  blur: function(value, link){
			var tip = $('#hover-test');
			$('#hover-test').html(tip[0].data || '');
		  }
		 });

		var data = [
    ["Illness", "Medication","Illness Start Date", "Illness End Date", "Treated By"],
    ["Flu", "Not sure", "21/10/2001", "23/10/2001", "Dr.House"],
     ["Flu", "Not sure", "21/10/2001", "23/10/2001", "Dr.House"],
     ["Flu", "Not sure", "21/10/2001", "23/10/2001", "Dr.House"],
  ];
  $(window).load(function(){
			 
   			 $.ajax({
					type:'POST',
					url: 'availabilitygrid.php',
					cache: false,
					data :{docId:<?echo $doctorId?>},
					success:function(data){
							//alert(data);
							$("#fineMsgUpdate").html(data).show(1000);	
							/*	$('html,body').animate({
							scrollTop: $(".avail").offset().top+100},3500);*/
							}
					
				});
				 $.ajax({
					type:'POST',
					url: 'doctordetailsfetch.php',
					cache: false,
					data :{docId:<?echo $doctorId?>},
					success:function(data){
							$("#fetchdoc").html(data).show(1000);	
									}
					
				});
				 $.ajax({
					type:'POST',
					url: 'appointmentlist.php',
					cache: false,
					data :{docId:<?echo $doctorId?>},
					success:function(data){
							//alert(data);
							$("#appointUpdate").html(data).show(1000);	
							}
				});
				
				 $.ajax({
					type:'POST',
					url: 'docnametagfetch.php',
					cache: false,
					data :{docId:<?echo $doctorId?>},
					success:function(data){
							//alert(data);
							$("#nametag").html(data).show(1000);	
							/*	$('html,body').animate({
							scrollTop: $(".avail").offset().top+100},3500);*/
							}
					
				});
			
				
});

 $('body').on('click', '.clickeventclass', function (e) {
    
    e.preventDefault();
			var sectionId = $(this).attr('id');
			
			var txt = $(this).text();
			
			location.href = "checkout.php?date="+sectionId+"&time="+txt+"&doctId="+<?echo $doctorId ?>;
			
		
		
		return false; 
			
				
				
});


$('body').on('submit', '#appointmentForm', function (e) {
    //alert("In here atleast");
    e.preventDefault();
	
			var $form = $(this);
			var dataser = $form.serialize();
			 $.ajax({
					type:'POST',
					url: 'confirmappointment.php',
					data: dataser,
					cache: false,
					success:function(data){
							//alert("success");
							$("#appointmentconifrmmsg").html(data).show(1000);
							
					}
					
				});
});
	/*$("#imageform").submit(function(event) {
			event.preventDefault();
			
			var $form = $(this);
			var dataser = $form.serialize();
			
				$.ajax({
					type:'POST',
					url: 'imageupload.php',
					data: dataser,
					cache: false,
					success:function(data){
							alert(data);
							//$("#tableMsg").html(data).show(1000);	
					}
					
				});
			});
*/
  $("#dataTable").handsontable({
    data: data,
    startRows: 6,
    startCols: 8,
	minSpareRows:1,
	colWidths: [180, 180, 180, 180, 180],
	rowHeights:[40, 40, 40, 40, 40],
	autoWrapRow: true,
  });
		});
		

	</script>
	
	
  </body>
</html>

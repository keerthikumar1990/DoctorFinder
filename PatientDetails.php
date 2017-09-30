<?php
session_start();
include("connection.php");

	$query = $mysqli->query("SELECT * FROM patient_details where patient_id='".$_SESSION['pid']."';");
	$num_row = mysqli_num_rows($result);

		
			
			
			/*if($_POST['specialitydropdown'])
			{
				$query = $query.' and s.field = '."'".mysqli_real_escape_string($link,$_POST['specialitydropdown'])."'";
			}
			if($_POST['docZipCode']){
				$query = $query.' and d.zip_code LIKE '."'%".mysqli_real_escape_string($link,$_POST['docZipCode'])."%'";
			}
			
			if($_POST['citysearch'])
			{
				$cityname = strtolower($_POST['citysearch']);
				$query = $query.' and lower(d.city) LIKE '."'%".mysqli_real_escape_string($link,$cityname)."%'";
			
			}
			
			if($_POST['state'])
			{
				$statename = strtolower($_POST['state']);
				$query = $query.' and lower(d.state) LIKE '."'%".mysqli_real_escape_string($link,$statename)."%'";
			
			}*/
			
			$result = mysqli_query($query);
			$results = mysqli_num_rows($result);
			
			while( ($row1 = mysqli_fetch_assoc($query)))
			{	
			
			
				/* <p  class="lead marginTop" ><span class="glyphicon glyphicon-briefcase"></span> Professional Statement</p>
							 <p  class="lead marginTop" ><span class="glyphicon glyphicon-briefcase"></span> Credentials</p>
							 <p class="bold  marginTop" >Education</p>
								<div id="education">
								</div>
							 <p class="bold  marginTop" >Hospital Affiliation</p>
								<div id="hospAffiliation">
								</div>							 
							  <p class="bold  marginTop" >Languages spoken</p> 
							  <div id="LanguagesSpoken">
								</div>
							 <p class="bold  marginTop" >Awards and Publications</p> 
							 <div id="Awards">
								</div>
							<p class="bold  marginTop" >Specialities</p> 
							<div id="Specialities">
								</div>*/
					echo "<h1 class='lead' >Mr. ".$row1['lastname']."</h1>
				
				<p>".$row1['address']." ".$row1['country_code']."</p>
				<p>Date of Birth:". $row1['dob']."</p>
                                    <p>Phone:". $row1['phone']."</p>
                                        <p>Phone:". $row1['email']."</p>

<a href='' class='pull-right btn btn-primary btn-sm' >Click here to search for doctors</a>
                                
                                <a href='pateditprof.php' class='btn btn-primary btn-sm'>Edit Profile </a>";
                                                      
              
				  }
				 
				
			
			
			
		
		//}
	
	
	

?>
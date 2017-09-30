<?php
	//require_once("db_const.php");
	//$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	session_start();
include("connection.php");
	$query = $mysqli->query("SELECT * FROM doctor_details where license_num= '".$_SESSION['id']."'; ");
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
			
			while( ($row = mysqli_fetch_assoc($query)))
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
					echo " <h1 class='lead' > Dr. ".$row['lastname']."</h1>
				<div>
				<input class='hover-star' type='radio' name='test-3B-rating-1' value='1' title='Very poor'/>
				<input class='hover-star' type='radio' name='test-3B-rating-1' value='2' title='Poor'/>
				<input class='hover-star' type='radio' name='test-3B-rating-1' value='3' title='OK'/>
				<input class='hover-star' type='radio' name='test-3B-rating-1' value='4' title='Good'/>
				<input class='hover-star' type='radio' name='test-3B-rating-1' value='5' title='Very Good'/>
				<span id='hover-test' style='margin:0 0 0 20px;'></span>
				</div>

				<p>".$row['address']."</p>
				<p>".$row['city']." ".$row['state']."</p>
                                    <p>".$row['zip_code']."</p>
                                <a href='doceditprof.php' class='btn btn-primary btn-sm'>Edit Profile </a>";
                                                      
              
				  }
				 
				
			
			
			
		
		//}
	
	
	

?>
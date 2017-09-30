<?php

session_start();
include("connection.php");
	$query = $mysqli->query("SELECT * FROM patient_history where pid='".$_SESSION['pid']."';");
	

		
			
			
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
			
			
			$results = mysqli_num_rows($query);
			
			if($results)
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
					echo "<table class='table' width='100%' align='center' border='1'>
                	<tr>
                    	<td align='center'>Illness</td>
                        <td align='center'>Start Date</td>
                        <td align='center'>End Date</td>
                        <td align='center'>Treated by</td>
                        <td align='center'>Medication</td>
                    </tr>";		
				$count =0;
			while( ($row = mysqli_fetch_assoc($query)))
				  {
			
			
                            echo " <tr>
                                <td align='center'>
                                    ".$row['illness']."
                                </td>       
                                <td align='center'>
                                    ".$row['start_date']."
                                <td align='center'>
                                    ".$row['end_date']."
                                </td>
                                <td align='center'>
                                    ".$row['treated_by']."
                                </td> 
                                <td align='center'>
                                    ".$row['course_of_treatment']."
                                </td>  
                                ";
                        }
                        echo "</table>";
                                                      
              
				  }
				 
				
			
			
			
		
		//}
	
	
	

?>
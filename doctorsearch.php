
<?php 
session_start();
include("connection.php");
		if(!$_POST['docZipCode'] AND !$_POST['citysearch'] AND !$_POST['specialitydropdown'] AND !$_POST['state']){
			$error .="</br>Please enter any of the fields below to proceed";
	
		}
		if($error) 
		{
		//$error ="There were error(s) in your  form :";
		
		$error = '<div class ="alert alert-danger col-md-6  col-md-offset-3 "><center>'.$error.'</center></div>.';
		echo $error;
		
		}
		else{
		
			
			$query = "select d.license_num,d.firstname,d.lastname,d.address,d.city,d.state,d.zip_code,s.field,d.docimage from doctor_details d,specialization s
														  where d.license_num = s.license_no";
			
			if($_POST['specialitydropdown'])
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
			
			}
			
			$result = mysqli_query($link,$query);
			$results = mysqli_num_rows($result);
			
			if($results)
			{	
			
			echo "<div  class='container table-responsive'  id='tableContainer'><table > ";
				
					
				$count =0;
				$countflag=0;
				while($row = mysqli_fetch_array($result))
				  {
				  
				  $img = base64_encode($row['docimage']);
				  
				  if($count%3==0) {
				  if($count!=0){
				  echo "</tr>";
				   }
				  }
				  if($count%3==0){
				  echo "<tr>";
				  }
				  echo "<td ><center><img style='width:150px;height:175px'src="."data:image/png;base64,".$img."></center></td>";
				  
				  echo "<div id='insidecontent'><td style='width:200px; height:100px;'>" . $row['firstname'] ." ". $row['lastname'] . "<br>". $row['field'] ."<br>". $row['address'] ."<br>".$row['city']." ".$row['state']." ". $row['zip_code'].
				  "<br><input type='button'  name ='coutbtn' id ='".$row['license_num']."' value ='Book Online' class='clickeventclass btn btn-success btn-sm marginTop'  /></td></div>";
				  
				  
				  
				  if($results == 1){
					  echo "</tr>";
					
				  }
				   $count++;
				  }
				 if($results>3){
					echo "</tr>";
				 }
				echo "</table>
				</div>";
				
			}
			else{
				$error = '<div class ="alert alert-danger">No doctor found for the search criteria provided</div>';
				echo $error;
			}
			
		
		}
	mysqli_close($link);
	
	

?>
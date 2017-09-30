
<?php 
session_start();
include("connection.php");
		
		
			$query = "select * from patient_details where patient_id = '".$_SESSION['pid']."'";
														
			
			$result = mysqli_query($link,$query);
			$results = mysqli_num_rows($result);
			
			if($results)
			{	
			
			
					
				$count =0;
				while($row1 = mysqli_fetch_array($result))
				  {
				  
				  echo "<div  class='container col-md-6  col-md-offset-3'  id='contentCont'> <h1 class='lead' >Mr. ".$row1['lastname']."</h1>
               
                <p>".$row1['address']." ".$row1['country_code']."</p>
                <p>Date of Birth:". $row1['dob']."</p>
                                    <p>Phone:". $row1['phone']."</p>
                                        <p>email:". $row1['email']."</p>

								<a href='patientprofile.php' class='pull-right btn btn-primary btn-sm' >Click here to search for doctors</a>
                               
                                <a href='' class='btn btn-primary btn-sm disabled'>Edit Profile </a></div>";
				  
				  
				  
				  }
				 
				
			}
			
			
		
		//}
	mysqli_close($link);
	
	

?>
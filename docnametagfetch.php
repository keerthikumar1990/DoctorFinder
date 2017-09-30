
<?php 
session_start();
include("connection.php");
		
			
			$query = "select * from doctor_details where license_num = '".$_POST['docId']."'";
								
			
			$result = mysqli_query($link,$query);
			$results = mysqli_num_rows($result);
			
			if($results)
			{	
			
			
					
				$count =0;
				while($row = mysqli_fetch_array($result))
				  {
				  
				  
				  
				  echo "<div  class='container col-md-6  col-md-offset-3'  id='contentCont'> 
				 <h1 class='lead' > Dr. ".$row['lastname']."</h1>
                

                <p>".$row['address']."</p>
                <p>".$row['city']." ".$row['state']."</p>
                                    <p>".$row['zip_code']."</p>
                                <a href='doceditprof.php' class='btn btn-primary btn-sm ' disabled>Edit Profile </a></div>";
				  
				  
				  
				
				  
				  }
				 
				
			}
			
			
		
		//}
	mysqli_close($link);
	
	

?>
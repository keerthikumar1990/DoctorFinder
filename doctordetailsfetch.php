
<?php 
session_start();
include("connection.php");
		
		
			$query = "select languages,professional_statement,acknowledgements,education,hospital,field from doctor_profile,specialization
														  where license_no = doc_id
														  and doc_id = '".$_POST['docId']."' ";
			
			
			
			$result = mysqli_query($link,$query);
			$results = mysqli_num_rows($result);
			
			if($results)
			{	
			
			
					
				$count =0;
				while($row = mysqli_fetch_array($result))
				  {
					echo "<p  class='lead marginTop' ><span class='glyphicon glyphicon-briefcase'></span> Professional Statement</p>
							 <div id='professionalstmt' class='marginforcontent'>
								<p>".$row['professional_statement']."</p>
								</div>		
							 <p  class='lead marginTop' ><span class='glyphicon glyphicon-briefcase'></span> Credentials</p>
							 <p class='bold  marginTop' >Education</p>
								<div id='education' class='marginforcontent'>
								<p>".$row['education']."</p>
								</div>
							 <p class='bold  marginTop' >Hospital Affiliation</p>
								<div id='hospAffiliation'class='marginforcontent'>
								<p>".$row['hospital']."</p>
								</div>							 
							  <p class='bold  marginTop' >Languages spoken</p> 
							  <div id='LanguagesSpoken' class='marginforcontent'>
							  <p>".$row['languages']."</p>
								</div>
							 <p class='bold  marginTop' >Awards and Publications</p> 
							 <div id='Awards' class='marginforcontent'>
							 <p>".$row['acknowledgements']."</p>
								</div>
							<p class='bold  marginTop' >Specialities</p> 
							<div id='Specialities' class='marginforcontent'>
							<p>".$row['field']."</p>
								</div>";
				  }
				 
				
			}
			
			
		
		//}
	mysqli_close($link);
	
	

?>
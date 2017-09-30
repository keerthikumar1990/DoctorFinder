
<?php 
session_start();
include("connection.php");

			//SQL injection possible if user uses command ');SELECT * from users;
					
					
			$query = "SELECT a.app_id,a.appt_start_time, a.appt_date, a.reason, a.confirmation, pd.firstname, pd.lastname, pd.address, pd.phone, pd.email,pd.country_code, pd.sex, pd.dob
						FROM patient_details pd, appointments a
						WHERE pd.patient_id = a.fixed_by
						AND a.fixed_with = '".$_POST['docId']."' ";
					  
		
			
			$result = mysqli_query($link,$query);
			$results = mysqli_num_rows($result);
			
			if($results)
			{	
			
			echo "<div  class='container table-responsive col-md-9'  id='appointmentList'>
				  <form  id='appointmentForm' method = 'post'  > 
			      <table class='table table-striped table-bordered table-hover' >
					<tr>
					<th>Patient Name</th>
					<th>Address</th>
					<th>Date Of Birth</th>
					<th>Appointment Date and Time</th>
					<th>Reason</th>
					<th>Confirm ?</th>
					</tr>";

				while($row = mysqli_fetch_array($result))
				  {
						 echo "<tr>";
						 if($row['sex'] == 'M'){
						  echo "<td> Mr.". $row['firstname'] ." ". $row['lastname'] ."</td>";
						  }else{
						    echo "<td> Ms.". $row['firstname'] ." ". $row['lastname'] ."</td>";
						  }
						  echo "<td>" . $row['address'] . "<br/>". $row['country_code'] ."<br/>"."Phone:".$row['phone']."<br/>"."email:".$row['email']."</td>";
						  echo "<td>" . $row['dob'] . "</td>";
						  echo "<td>" . $row['appt_date']." ".$row['appt_start_time']."</td>";
						  echo "<td>" . $row['reason'] . "</td>";
						  if($row['confirmation']=='0' )
						  {
						  echo "<td><center><input type='checkbox' name='confirmarray[]' value='".$row['app_id']."'></center></td>";
						  }else{
							echo "<td><center>Confirmed</td>";
						  }
						  echo "</tr>";
						  
					}
				echo "</table>
					  <div  class='col-md-6  col-md-offset-3 btnpadding'>
					  <input type='submit'  name ='finalconfirmbtn' id ='finalconfirmbtn' value ='Confirm' class='btn btn-success btn-lg marginTop marginBottom'  /> 
					  </div>
					  </form></div>";
				
			}
			else{
				$error = '<div class ="col-md-6 alert alert-info">No Appointments Booked yet</div>';
				echo $error;
			}
			
		
		
	mysqli_close($link);

?>
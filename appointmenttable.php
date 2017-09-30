
<?php 
session_start();
include("connection.php");

				
			$query = "SELECT * from appointments where fixed_by='".$_SESSION['pid']."'";
			
			$result = mysqli_query($link,$query);
			$results = mysqli_num_rows($result);
			
			if($results)
			{	
			
			echo "<div  class='container table-responsive'  id='tableContainer'><table class='table table-striped table-bordered table-hover '>
				<tr>
				<th>Appointment Date</th>
				<th>Start Time</th>
				<th>reason</th>
				<th>Confirmation</th>
				</tr>";

				while($row = mysqli_fetch_array($result))
				  {
				  echo "<tr>";
				  echo "<td>" . $row['appt_date'] . "</td>";
				  echo "<td>" . $row['appt_start_time'] . "</td>";
				  echo "<td>" . $row['reason'] . "</td>";
				  if($row['confirmation'] == 0){
						$temp = "Not Confirmed Yet";
				  }else{
						$temp = "Confirmed";
				  }
				  
				  echo "<td>" . $temp . "</td>";
				 echo "</tr>";
				  }
				echo "</table>
				<div  class='pull-right'>
			</div></div>";
				
			}
			else{
				$error = '<div class ="alert alert-danger">No books with the provided details is available in the inventory</div>';
				echo $error;
			}
			
		

	mysqli_close($link);
	
	

?>
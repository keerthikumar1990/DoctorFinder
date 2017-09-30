<?php 
session_start();
include("connection.php");
			
			//SQL injection possible if user uses command ');SELECT * from users;
			
			
				$query1 = "INSERT INTO `appointments` (`appt_date`,`appt_start_time`,`reason`,`fixed_with`,`fixed_by`) VALUES ('".mysqli_real_escape_string($link,$_POST['date'])."',
																											  '".mysqli_real_escape_string($link,$_POST['time'])."',
																											  '".mysqli_real_escape_string($link,$_POST['reason'])."',
																										      '".mysqli_real_escape_string($link,$_POST['did'])."',
																										      '".mysqli_real_escape_string($link,$_POST['pid'])."'
																										       )"; 
				
				 
				if(!mysqli_query($link,$query1))
				{
				$error = mysqli_error($link);
				$error = '<div class ="alert alert-danger">Database Error'.$error.'</div>';
				echo $error;
				}else{
				$cardNo= mysqli_insert_id($link);
				
				$borrowerMessage = '<div class ="alert alert-success"><p>Appointment successfully fixed.</p><p>Please wait till the doctor approves your appointment.</p><p>You can check appointment status <a href ="patienthistory.php" class="btn btn-success btn-sm " ">here</a></div>';
					echo $borrowerMessage;
				}
			
		
		
	mysqli_close($link);

?>
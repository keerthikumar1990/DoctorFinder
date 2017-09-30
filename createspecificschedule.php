<?php 
session_start();
include("connection.php");


		if(!$_POST['specificdate']){
			$error .="</br>Please enter the 'from' date";
		}
	
		if(!$_POST['fromtimespecific'])
		{
			$error .="</br>Please enter the 'to' date";
		}
		if(!$_POST['totimespecific'])
		{
			$error .="</br>Please enter the 'from' time";
		}
		
	
		if($error) 
		{
		//$error ="There were error(s) in your  form :";
		
		$error = '<div class ="alert alert-danger">There were error(s) in your  form :'.$error.'</div>';
		echo $error;
		}
		else{
								
					
					//print_r($days);
								
			//SQL injection possible if user uses command ');SELECT * from users;
					
					$query = "SELECT * from `availability` where `doc_id` = '".$_SESSION['id']."' AND `start_time`   ='".mysqli_real_escape_string($link,$_POST['fromtimespecific'])."'
																					 AND `end_time` ='".mysqli_real_escape_string($link,$_POST['totimespecific'])."'
																					 AND `avail_date`   ='".mysqli_real_escape_string($link,$_POST['specificdate'])."'
																																					   ";
												//echo $query;
			$result = mysqli_query($link,$query);
			$results = mysqli_num_rows($result);
			//echo "-------------------------------->>>>".$results ;
			$row=mysqli_fetch_array($result);
			if($results)
			{	
				$error = '<div class ="alert alert-danger">Please use update or delete option to change this date\'s availability :'.$appoint_date.'</div>';
				echo $error;
			}
			else{
			
				$temp = date('Y-m-d', strtotime($_POST['specificdate']));
				$query1 = "INSERT INTO `availability` (`doc_id`,`start_time`,`end_time`,`avail_date`) VALUES ('".$_SESSION['id']."',
																											  '".mysqli_real_escape_string($link,$_POST['fromtimespecific'])."',
																											  '".mysqli_real_escape_string($link,$_POST['totimespecific'])."',
																										      '".mysqli_real_escape_string($link,$temp)."'
																										      
																											   )"; 
				
				 
				 
				if(!mysqli_query($link,$query1))
				{
				$error = mysqli_error($link);
				$error = '<div class ="alert alert-danger">Database Error'.$error.'</div>';
				echo $error;
				}else{
				
				$AddedRecordsMsg = '<div class ="alert alert-success">work plan for '.$_POST['specificdate'].' added To database</div>';
					echo $AddedRecordsMsg;	
				}
			}	
		
		}	
			
	mysqli_close($link);

?>
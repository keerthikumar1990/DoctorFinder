<?php 
session_start();
include("connection.php");


		if(!$_POST['from1']){
			$error .="</br>Please enter the 'from' date";
		}
	
		if(!$_POST['to1'])
		{
			$error .="</br>Please enter the 'to' date";
		}
		if(!$_POST['fromtime1'])
		{
			$error .="</br>Please enter the 'from' time";
		}
		if(!$_POST['totime1'])
		{
			$error .="</br>Please enter the 'to' time";
		}
		
		if($error) 
		{
		//$error ="There were error(s) in your  form :";
		
		$error = '<div class ="alert alert-danger">There were error(s) in your  form :'.$error.'.</div>.';
		echo $error;
		}
		else{
								
					$start = $_POST['from1'] ;
					$end = $_POST['to1'];

					$num_days = floor((strtotime($end)-strtotime($start))/(60*60*24));
					$data = $_POST['fromtime1']."|".$_POST['totime1'];

					$days = array();

					for ($i=0; $i<$num_days+1; $i++) {
						if (date('N', strtotime($start . "+ $i days"))){
							$days[date('Y-m-d', strtotime($start . "+ $i days"))] = $data;}
					}
					//print_r($days);
								
			//SQL injection possible if user uses command ');SELECT * from users;
			$dateAdded = "";
			foreach($days as $appoint_date => $appt_time) {
			
					$temp = explode("|", $appt_time);
					$start_time = $temp[0];
					$end_time =$temp[1];
					
					
					$query = "SELECT * from `availability` where `doc_id` = '".$_SESSION['id']."' AND `start_time`   ='".mysqli_real_escape_string($link,$start_time)."'
																					 AND `end_time` ='".mysqli_real_escape_string($link,$end_time)."'
																					 AND `avail_date`   ='".mysqli_real_escape_string($link,$appoint_date)."'
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
				$query1 = "INSERT INTO `availability` (`doc_id`,`start_time`,`end_time`,`avail_date`) VALUES ('".$_SESSION['id']."',
																											  '".mysqli_real_escape_string($link,$start_time)."',
																											  '".mysqli_real_escape_string($link,$end_time)."',
																										      '".mysqli_real_escape_string($link,$appoint_date)."'
																										      
																											   )"; 
				
				 
				if(!mysqli_query($link,$query1))
				{
				$error = mysqli_error($link);
				$error = '<div class ="alert alert-danger">Database Error'.$error.'</div>';
				echo $error;
				}else{
				$dateAdded = $appoint_date."  ".$dateAdded;
				
				}
			}	
		
		}	


					$AddedRecordsMsg = '<div class ="alert alert-success">Following dates added successfully to database:'.$dateAdded.'</div>';
					echo $AddedRecordsMsg;		
			}
			
	mysqli_close($link);

?>
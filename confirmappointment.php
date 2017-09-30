<?php 
session_start();
include("connection.php");


if(isset($_POST['confirmarray']) && is_array($_POST['confirmarray']) && count($_POST['confirmarray']) > 0){
   	$Tracker;
	foreach($_POST['confirmarray'] as $appointId){
        $datetoday = date("m/d/Y");
		$query = "UPDATE appointments SET confirmation = true WHERE app_id ='".$appointId."' ";
		
			if(!mysqli_query($link,$query))
				{
				$error = mysqli_error($link);
				$Tracker .= '</br>Database Error'.$error.'Appoint Id :'.$appointId.'confirmation update failed';
				
				}
				else{
				
				$Tracker .=  '</br>Appointment with id :'.$appointId." is confirmed";
				
				}
    }
	if($Tracker){
	$cinMessage = '<div class ="alert alert-info col-md-6  col-md-offset-3">Summary:'.$Tracker.'</div>';
	echo $cinMessage;
	}
	
				
}else{
	
	$cinMessage = '<div  class="col-md-6  col-md-offset-3"><div class ="alert alert-danger">Please select a record to Confirm</div></div>';
	echo $cinMessage;
}

mysqli_close($link);

?>
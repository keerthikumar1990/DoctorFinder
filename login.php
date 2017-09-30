<?php
session_start();
	include("connection.php"); 
	
	
	
	if(isset($_GET['logout']) && $_GET['logout'] == 1)
	{
		if($_SESSION['id']){
		session_destroy();
		$message = "You have been logged out.Have a nice day doctor!";
		}else if($_SESSION['pid']){
		session_destroy();
		$message = "You have been logged out.Have a nice day!";
		}
		
	}
	
	if(isset($_GET['access']) && $_GET['access'] == "unauthorized"){
		$error = "Unauthorized access.Kindly login to continue";
	}
	
			
	if(isset($_POST['submit']) && $_POST['submit'] == "Click here to Sign Up"){
	
	
		if(!$_POST['patientemail']){
			
			$error .="</br>Please enter your email";
		}else
		{
			if(!filter_var($_POST['patientemail'],FILTER_VALIDATE_EMAIL)) $error .= "</br>please enter a valid  email";
		}
		if(!$_POST['confirmemail']){
		
			$error .="</br>Please enter your confirm email";
		}else
		{
			if(!filter_var($_POST['confirmemail'],FILTER_VALIDATE_EMAIL)) $error .= "</br>please enter a valid confirm email";
			if($_POST['patientemail'] != $_POST['confirmemail']){
				$error .="</br>Confirm Email doesn't match with email";
			}
		}
		
		if(!$_POST['loginpassword'])
		{
			$error .="</br>Please enter your password";
			
		}else
		{
			if(strlen($_POST['loginpassword'])<8) $error .="</br>Please enter a password with atleast 8 characters";
			if(!preg_match('`[A-Z]`',$_POST['loginpassword'])) $error .="</br>please enter a password with capital letter ";
		}
		if(!$_POST['patientfname'])
		{
			$error .="</br>Please enter your first name";
			
		}
		if(!$_POST['patientlname'])
		{
			$error .="</br>Please enter your last Name";
			
		}
		if(!$_POST['dob'])
		{
			$error .="</br>Please enter your date of birth";
			
		}
		if(!$_POST['sex'])
		{
			$error .="</br>Please enter field :sex";
			
		}
		
		if($error) 
		{
		$error = "There were error(s) in your  signup details :".$error;
		}
		else{
			
			//SQL injection possible if user uses command ');SELECT * from users;
			
			$query = "SELECT * from `users` where `email` ='".mysqli_real_escape_string($link,$_POST['patientemail'])."'";
			$result = mysqli_query($link,$query);
			$results = mysqli_num_rows($result);
			
			if($results)
			{
				$error = "That email address is already registered .Do you want to login?";
			}else{
			
			$query1 = "INSERT INTO `users` (`email`,`password`,`user_type`) VALUES ('".mysqli_real_escape_string($link,$_POST['patientemail'])."','".md5(md5($_POST['patientemail'].$_POST['loginpassword']))."','P')"; 
				mysqli_query($link,$query1);
				
				//echo "You have been signed up";
				$temp = date('Y-m-d', strtotime($_POST['dob']));
				$query2 = "INSERT INTO `patient_details` (`firstname`,`lastname`,`email`,`dob`,`sex`) VALUES ('".mysqli_real_escape_string($link,$_POST['patientfname'])."',
																																						'".mysqli_real_escape_string($link,$_POST['patientlname'])."',
																																						'".mysqli_real_escape_string($link,$_POST['patientemail'])."',
																																						'".mysqli_real_escape_string($link,$temp)."',
																																						'".mysqli_real_escape_string($link,$_POST['sex'])."'
																																						)"; 
				//echo $query2;
				$result = mysqli_query($link,$query2);
				
				$_SESSION['pid'] = mysqli_insert_id($link);
				header("Location:patienthistory.php");
				
				}
			}
		}
	
	if(isset($_POST['submit']) && $_POST['submit'] == "Sign Up"){
	
	
		if(!$_POST['docemail']){
		
			$error .="</br>Please enter your email";
		}else
		{
			if(!filter_var($_POST['docemail'],FILTER_VALIDATE_EMAIL)) $error .= "</br>please enter a valid email";
		}
		if(!$_POST['confirmdocemail']){
		
			$error .="</br>Please enter your confirm email";
		}else
		{
			if(!filter_var($_POST['confirmdocemail'],FILTER_VALIDATE_EMAIL)) $error .= "</br>please enter a valid confirm email";
			if($_POST['docemail'] != $_POST['confirmdocemail']){
				$error .="</br>Confirm Email doesn't match with email";
			}
		}
		
		if(!$_POST['docloginpassword'])
		{
			$error .="</br>Please enter your password";
			
		}else
		{
			if(strlen($_POST['docloginpassword'])<8) $error .="</br>Please enter a password with atleast 8 characters";
			if(!preg_match('`[A-Z]`',$_POST['docloginpassword'])) $error .="</br>please enter a password with capital letter ";
		}
		if(!$_POST['docfname'])
		{
			$error .="</br>Please enter your first name";
			
		}
		if(!$_POST['doclname'])
		{
			$error .="</br>Please enter your last Name";
			
		}
		if(!$_POST['docId'])
		{
			$error .="</br>Please enter License Num";
			
		}
		if(!$_POST['specialization'])
		{
			$error .="</br>Please enter specialization";
			
		}
		
		if(!$_POST['city'])
		{
			$error .="</br>Please enter city";
			
		}
		if(!$_POST['state'])
		{
			$error .="</br>Please enter state";
			
		}
		if(!$_POST['docZipCode'])
		{
			$error .="</br>Please enter zip code";
			
		}
		
	
		if($error){
		$error = "There were error(s) in your  signup details :".$error;
		}
		else{
			
			//SQL injection possible if user uses command ');SELECT * from users;
			
			$query = "SELECT * from `users` where `email` ='".mysqli_real_escape_string($link,$_POST['docemail'])."'";
			$result = mysqli_query($link,$query);
			$results = mysqli_num_rows($result);
			
			if($results)
			{
				$error = "That email address is already registered .Do you want to login?";
			}
			else{
				
				//$query="INSERT INTO `users`(`email`,`password`) VALUES('".mysqli_real_escape_string($link,$_POST['email'])."','".md5(md5($_POST['email'].$_POST['password']))."')";
				$query1 = "INSERT INTO `users` (`email`,`password`,`user_type`) VALUES ('".mysqli_real_escape_string($link,$_POST['docemail'])."','".md5(md5($_POST['docemail'].$_POST['docloginpassword']))."','D')"; 
				mysqli_query($link,$query1);
				
				//echo "You have been signed up";
				$query2 = "INSERT INTO `doctor_details` (`firstname`,`lastname`,`license_num`,`zip_code`,`city`,`state`,`address`,`doc_email`) VALUES ('".mysqli_real_escape_string($link,$_POST['docfname'])."',
																																						'".mysqli_real_escape_string($link,$_POST['doclname'])."',
																																						'".mysqli_real_escape_string($link,$_POST['docId'])."',
																																						'".mysqli_real_escape_string($link,$_POST['docZipCode'])."',
																																						'".mysqli_real_escape_string($link,$_POST['city'])."',
																																						'".mysqli_real_escape_string($link,$_POST['state'])."',
																																						'".mysqli_real_escape_string($link,$_POST['docaddress'])."',
																																						'".mysqli_real_escape_string($link,$_POST['docemail'])."'
																																						)"; 
																																						
																																					
				mysqli_query($link,$query2);
				
					mysqli_query($link,$query2);
				
				$query3 = "INSERT INTO `specialization` (`license_no`,`field`) VALUES ('".mysqli_real_escape_string($link,$_POST['docId'])."',
																						'".mysqli_real_escape_string($link,$_POST['specialization'])."'
																						)"; 
																																						
					
				
					mysqli_query($link,$query3);
				
					mysqli_query($link,$query3);
				
				
				$_SESSION['id'] = $_POST['docId'];
				header("Location:doctorprofile.php");
			}
		}
		
		
	}
	
	
	 if(isset($_POST['submit']) && $_POST['submit'] == "Log In"){
			
			$query = "SELECT user_type from `users` WHERE `email` = '".mysqli_real_escape_string($link,$_POST['email'])."' AND `password`= '".md5(md5($_POST['email'].$_POST['password']))."' LIMIT 1";
			$result = mysqli_query($link,$query);
			$row=mysqli_fetch_array($result);
			
			//echo $_POST['email'];
			//echo $_POST['password'];
			//echo $row['user_type'];
			//echo $query;
			echo $_SESSION['pid'];
			echo $_SESSION['id'];
			if($row){
			
						if($row['user_type'] == 'P'){
						
						$query = "SELECT * from `patient_details` WHERE `email` = '".mysqli_real_escape_string($link,$_POST['email'])."'";
						$result = mysqli_query($link,$query);
						$row=mysqli_fetch_array($result);	
					
						$_SESSION['pid'] = $row['patient_id'];
						echo "PATIENT ID SET :".$_SESSION['pid'];
						header("Location:patienthistory.php");
						}else{
						$query = "SELECT * from `doctor_details` WHERE `doc_email` = '".mysqli_real_escape_string($link,$_POST['email'])."'";
						$result = mysqli_query($link,$query);
						$row=mysqli_fetch_array($result);	
					
						$_SESSION['id'] = $row['license_num'];
						header("Location:doctorprofile.php");
						echo "Doctor ID SET :".$_SESSION['id'];
						}
				//Redirect to logged in page 

			}else{
				$loginError = "Incorrect Username/password";
				
			}
			
		}
	mysqli_close($link);
?>
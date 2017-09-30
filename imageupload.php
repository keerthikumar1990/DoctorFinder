<?php
session_start();
include("connection.php");
	echo "inside";
	
  move_uploaded_file($_FILES['imagefile']['tmp_name'],"latest.img");
        $instr = fopen("latest.img","rb");
        $image = addslashes(fread($instr,filesize("latest.img")));
					echo $image;
			$query="INSERT INTO `doctor_details` (`docimage`) VALUES ('".$image."')";
        	$result = mysqli_query($link,$query);
			$results = mysqli_num_rows($result);
			if($result){
				echo "WOW!!";

				}else{
					echo "EWWW!";
				}
?>
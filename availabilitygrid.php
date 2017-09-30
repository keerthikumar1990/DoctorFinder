<?php 
session_start();
include("connection.php");


$query = "select start_time,end_time,avail_date from availability where doc_id= '".$_POST['docId']."'";
$query1 = "select appt_date,appt_start_time from appointments where fixed_with= '".$_POST['docId']."'";

$result1= mysqli_query($link,$query1);
$results1 = mysqli_num_rows($result1);
				//echo "Num".$results1;
						$associativeArray = array();
				$count == 0;
				while($row1 = mysqli_fetch_array($result1)){
					$count++;
				   // Put the values into the array, no otehr variables needed
				   $appointmentDate =  $row1['appt_date']."_".$count;
				   $associativeArray[$appointmentDate] = $row1['appt_start_time'];
				}

				foreach($associativeArray as $k => $id){
					//echo $k."=>".$id;
					
			}
		
			
$result= mysqli_query($link,$query);
$results = mysqli_num_rows($result);
			
if($results)
{

		echo "<div  class='container table-responsive col-md-9 ' id='tableContainer'><table class='table table-bordered table-striped  '>";
				  while($row = mysqli_fetch_array($result))
				  {
					
					echo "<tr>";
					echo "<td  style='min-width: 100px;'>" . $row['avail_date'] . "</td>";
					$avail_date =  $row['avail_date'];
				    $starttime = $row['start_time'];
					$endtime = $row['end_time'];
						
						//$diff = floor ((strtotime($row['avail_date'])- strtotime($row1['avail_date']))/86400);
							
						$startint = intval(strtotime(strtolower($starttime)));
						$endint= intval(strtotime(strtolower($endtime)));
						$starttime = date('h:i A', strtotime($starttime));
						for($i=$startint;$i<$endint;$i=$i+1800)
						{
						
								$flag = 0;
								foreach($associativeArray as $appoint_date => $appt_time) {
										$temp = explode("_", $appoint_date);
										$appoint_date = $temp[0];
										$avail_dateintime = strtotime($avail_date);
										$appoint_dateintime = strtotime($appoint_date);
									
									if($avail_dateintime == $appoint_dateintime){
										
											if(date('h:i A', strtotime(($appt_time))) == $starttime){
												
											echo "<td style='min-width: 80px;'><a href='#' class='btn btn-danger btn-sm disabled' >" .  $starttime . "</a></td>";
											$flag =1;
											}
											
										}
								
							  }
							  	 if($flag !=1){
										
								echo "<td style='min-width: 80px;'><a href='#' class='btn btn-primary btn-sm clickeventclass' data-toggle='modal' data-target='#myModal' id="."'".$avail_date."'".">" .  $starttime . "</a></td>";
						
								}
							   //echo "<td style='min-width: 80px;'><a href='#' class='btn btn-primary btn-sm'>" .  $starttime . "</a></td>";
							
							  $starttime = date('h:i A', strtotime($starttime)+1800);
							} 
							echo "</tr>";
						}
						echo "</table></div>";
						
				  }
				
mysqli_close($link);

?>
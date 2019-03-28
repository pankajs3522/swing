<?php
session_start();
include('../dbconnect.php');


if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
			
		
					 $query = "INSERT INTO cars_pool(u_id,c_id,avail_seats,luggage,message,source,destination,source_timing,destination_timing) 
							  VALUES('".$_SESSION['id']."','".$_POST['c_id']."','".$_POST['avail_seats']."','".$_POST['luggage']."','".$_POST['message']."','".$_POST['source']."','".$_POST['destination']."','".$_POST['source_timing']."','".$_POST['destination_timing']."')";

					mysqli_query($db,$query);
					echo "Details Uploaded!";
					
	}
	?>
	<script language="javascript">
	
	document.location.replace("../../../index.php?pool=done");
	
	</script>
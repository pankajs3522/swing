<?php

			}

	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
			
		
					 $query = "INSERT INTO pool_notifications(u_id,c_id,value,pickup_time,pickup_spot,destination) 
							  VALUES('".$_SESSION['id']."','".$_POST['c_id']."','".$_POST['message']."','".$_POST['time']."','".$_POST['pickup_spot']."','".$_POST['destination']."')";

					mysqli_query($db,$query);
					
					header("Location : dashboard.php");
					echo "Request Sent!";
	}
	?>
					
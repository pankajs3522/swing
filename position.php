<?php 
session_start();
include("dbconnect.php");
$_SESSION['bus']=1;
			$sqlz = "UPDATE location SET lat='".$_POST['lat']."',lon='".$_POST['lon']."' WHERE bus_id=".$_SESSION['bus'];
            $resultz = mysqli_query($db,$sqlz);
			echo $sqlz;
	
?>

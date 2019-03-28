<?php
// Database configuration
$db=mysqli_connect('localhost', 'root','','swing');
mysqli_set_charset($db,"utf8");
if($db->connect_error){
	die("connection failed ");
}
?>

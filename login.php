<?php
session_start();
include('dbconnect.php');
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$password = md5($password);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$query = "SELECT * FROM users WHERE phone='$email' AND password='$password'";
		}
		else
		{
			$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		}			
	echo $query;
 $resultz = mysqli_query($db,$query);
            $a=array();
            if(mysqli_num_rows($resultz)==-1)
            {
            echo "Please Check Your Credentials!";
            
            }
            else
            {
            while($roz = mysqli_fetch_assoc($resultz))
            {
            $_SESSION['id']=$roz['id'];
			$_SESSION['type']="us";
		
			header("Location: dashboard.php");

            }
			}
			
            ?>
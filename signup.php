<?php 
session_start();
include("dbconnect.php");
	$errors = array();
		$full_name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db,$_POST['password']);


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			//echo $password_1;
			$password = md5($password);//encrypt the password before saving in the database
			

			
		 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  		     $query = "INSERT INTO users(full_name,phone,password) 
					  VALUES('$full_name','$phone','$password')";
				  
			mysqli_query($db,$query);

      
			}
			else
			{
			    		     $query = "INSERT INTO users(full_name,email,password) 
					  VALUES('$full_name','$email','$password')";
				  
			mysqli_query($db,$query);
		        			
		}
		}


	header("Location: login.html");

	
	
	
?>

<?php
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "hackathon";

	//$conn =  mysqli_connect("$host","$dbusername","$dbpassword","$db");
	$conn =  new mysqli("$host","$dbusername","$dbpassword","$db");

	if($conn){
		echo"";
	}else{
		die("Connection failed: ".mysqli_connect_error());
	}
	/*
	if (empty($_REQUEST['user_name'])) 
		{ array_push($errors, "Username is required"); }
        	if (empty($_REQUEST['user_email'])) 
		{ array_push($errors, "Email is required"); }
        	if (empty($_REQUEST['user_message'])) 
		{ array_push($errors, "Message is required"); }
	*/


	$user = $_REQUEST['user_name'];
	$email = $_REQUEST['user_email'];	
	$message = $_REQUEST['user_message'];
	
	
	$sql = "INSERT INTO contact (username,email,message) VALUES('$user','$email','$message')";

	if(mysqli_query($conn,$sql))
	{
		//echo"registration successfull";	
		header('location:index.html');
	}
	$conn->close();
?>


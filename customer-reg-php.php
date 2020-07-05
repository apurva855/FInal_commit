<?php
	include('dbconnection.php');


	$name = $_REQUEST['fname'];
	$address = $_REQUEST['address'];
	$contact = $_REQUEST['contact'];
	$userid = $_REQUEST['uid'];
	$pass = $_REQUEST['pass'];	
	
	
	$sql = "INSERT INTO customer1(name,address,contact,userid,password) VALUES('$name','$address','$contact','$userid','$pass')";
	$data=mysqli_query($conn,$sql);
	if($data)
	{
		//echo"registration successfull";	
		header('location:customer-login.html');
	}
	else{
		//header('location:farmer-reg.html');
		echo"error";
	}
	$conn->close();
?>


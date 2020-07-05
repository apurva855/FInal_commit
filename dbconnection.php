<?php
	$dbhost='localhost';
	$username='root';
	$password='';
	$db='digital farmer';

	$conn=new mysqli("$dbhost","$username","$password","$db");
	if($conn)
	{
		echo"";
	}
	else
	{
		die("connection failed because ".mysqli_connect_error());
	}


?>

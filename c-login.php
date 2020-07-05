<?php

include('dbconnection.php');
$username1 =$_POST['username'];
$password1 =$_POST['password'];
$query="SELECT * FROM customer1 WHERE userid='$username1' && password='$password1'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	header('location:customer_home.php');
}
else
{
	header('location:customer-reg.html');
	echo"";
}


?>
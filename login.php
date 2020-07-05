<?php

include('dbconnection.php');
$username1 =$_POST['userid'];
$password1 =$_POST['password'];
$query="SELECT * FROM farmer WHERE userid='$username1' && password='$password1'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	header('location:farmer_home.php');
}
else
{
	header('location:farmer-reg.html');
	echo"";
}


?>
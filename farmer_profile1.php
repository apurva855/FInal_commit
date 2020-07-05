<html>
	<head>
		<title> Farmer Profile </title>
		<link rel="stylesheet" href="farmer_style.css">

		<meta charset="UTF-8">
		<meta name="description" content="profile page">
		<meta name="keywords" content="farmer profile">

	</head>
	<body>
		<div class="nav">
			<div> Your Profile </div>
			<ul>
				<li><a href="farmer_home.html">Home</a></li>
				<li><a href="product.html">Sell Product </a></li>
				<li><a href="farmer_profile.html">My Profile </a></li>
				<li><a href="index.html">Logout</a></li>
			</ul>
		</div>

		<div class="container">
			<h2> My Profile </h2>


			<?php 

	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "digital farmer";

	//$conn =  mysqli_connect("$host","$dbusername","$dbpassword","$db");
	$conn =  new mysqli("$host","$dbusername","$dbpassword","$db");

	if($conn){
		echo"";
	}else{
		die("Connection failed: ".mysqli_connect_error());
	}

	$user = $_POST['username'];
	$sql="(SELECT * FROM farmer where userid='$user'  ) ";
	$result=mysqli_query($conn,$sql);


	  	$row3 = mysqli_fetch_array($result);
		
		$id=$row3['id'];
		$name=$row3['name'];
		$address=$row3['address'];
		$contact=$row3['contact'];
		$userid=$row3['userid'];
		
		echo "<br><br>";
		echo "<p style= ' font-size:25px; margin-left:70px; '>ID :  ".$id. " </p><br>";	
		echo "<p style= ' font-size:25px; margin-left:70px; '>Name : ".$name. "</p><br>";	
		echo "<p style= ' font-size:25px; margin-left:70px; '>Address : ".$address. "</p><br>";	
		echo "<p style= ' font-size:25px; margin-left:70px; '> Contact Number : ".$contact. "</p><br>";	
		echo "<p style= ' font-size:25px; margin-left:70px; '>User ID : ".$userid. "</p><br>";	
		echo "<hr><br>";
		echo "<h3 style = ' margin-left:40px; font-size:30px; color:black; '>My Added Products : </h3> ";

		// display product information added by farmer

		$query2="(SELECT * FROM products where userid='$user'  ) ";
	  	$result2=mysqli_query($conn,$query2);

		while($row2 = mysqli_fetch_array($result2))
		{
		$prod_id=$row2['id'];
		$prod_name=$row2['prod_name'];
		//$prod_image=$row2['prod_image'];
		$prod_qty=$row2['quantity'];
		$price=$row2['price'];
		
		echo "<br><hr><br>";
		echo "<p style= ' font-size:25px; margin-left:70px; '> Product ID :  ".$prod_id. " </p><br>";	
		echo "<p style= ' font-size:25px; margin-left:70px; '> Product Name : ".$prod_name. "<br><br>";	
		//echo "<p style= ' font-size:25px; margin-left:70px; '>Image : " .$prod_image. "</p><br>";	
		echo "<p style= ' font-size:25px; margin-left:70px; '> Quantity : " .$prod_qty. "</p><br>";	
		echo "<p style= ' font-size:25px; margin-left:70px; '> Price : " .$price. "</p><br>";
		}	


?>
		</div>

	</body>
</html>


	
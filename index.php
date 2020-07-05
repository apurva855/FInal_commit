<html>
	<head>
		<title> Home Page </title>
		<link rel="stylesheet" href="style.css">


		<meta charset="UTF-8">
		<meta name="description" content="Home page">
		<meta name="keywords" content="DigitalFarmer,home">
	</head>
	<body>
	<div class="home">
		<div class="nav">
			<div>Digital Farmer </div>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="login.html">Login</a></li>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</div>
	
		<div class="text-container">
			<div>
				<h1>Digital Farmer </h1><br><br><br>
				<h2>NEXT INNOVATION<h2>
			</div>
		</div>
	</div>
	<?php
		include('dbconnection.php');
		$query1="SELECT * FROM products";
$result=mysqli_query($conn,$query1);?>
<table border="2px" align="center" style="width:1000px; line-height: 40px;">
	<tr>
		<th>Name</th>
		<th>Product Name</th>
		<th>Image</th>
		<th>Quantity</th>
		<th>Price</th>
	</tr>
	<?php
while($row=mysqli_fetch_array($result))
{
?>

	<tr> 
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["prod_name"]; ?></td>
		<td><img src="images/<?php echo $row["image"];?>"" height="100" width="100"><?php
		// echo '<img src ="data:image ;base64,'.base64_encode($row["image"]).'"alt="image" style="width:100px;height: 100px;">'; ?></td>
		<td><?php echo $row["quantity"]; ?></td>
		<td><?php echo $row["price"]; ?></td>
	</tr>
	

<?php
}
?>
</table>
	</body>
</html>
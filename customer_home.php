<html>
	<head>
		<title> Customer Home Page </title>
		<link rel="stylesheet" href="customer_style.css">

		<meta charset="UTF-8">
		<meta name="description" content="Customer page">
		<meta name="keywords" content="Digital Farmers,customer">

	</head>
	<body>
		<div class="nav">
			<div>Customer </div>
			<ul>
				<li><a href="customer_home.html">Home</a></li>
				<li><a href="advertise.html">Crop Advertisement </a></li>
				<li><a href="customer_profile.html">My Profile </a></li>
				<li><a href="index.html">Logout</a></li>
			</ul>
			<html>

				<head>
					<title> </title>
					<link rel="stylesheet" type="text/css" href="search.css">
					<meta charset="UTF-8">
					<meta name="description" content="Farmer page">
					<meta name="keywords" content="Digital Farmers,farmer">

				</head>
				<body>
						<form class="search-form" action="search.php" method="post">
							<input type="text" name="prod_name" placeholer="search Product"required style="width: 300px; background-color: white; float: left; margin-top: 10px;">
						<input type="submit" name ="search" style="width: 100px; background-color: grey; margin-top: 10px; "></form>
					</div>
				</body>
			</html>
			
		</div>
		<!---<?php
			include('dbconnection.php');

			$query1="SELECT * FROM products";
			$result=mysqli_query($conn,$query1);?>
			<table border="2px" align="center" style="width:1000px; line-height: 40px;">
			<tr><th>Commodity Information</th></tr></table>
			<table border="2px" align="center" style="width:1000px; line-height: 40px;">
				<tr>
					<th>Name</th>
					<th>Product Name</th>
					<th>Contact</th>
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
					<td><?php echo $row["contact"]; ?></td>
					<td><img src="images/<?php echo $row["image"];?>"" height="100" width="100"> </td>
					<td><?php echo $row["quantity"]; ?></td>
					<td><?php echo $row["price"]; ?></td>
				</tr>
				

			<?php
			}
			?>
			</table>
--->
	</body>
</html>

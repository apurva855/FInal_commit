<?php
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$db = "digital farmer";
	session_start();
	//$conn =  mysqli_connect("$host","$dbusername","$dbpassword","$db");
	$conn =  new mysqli("$host","$dbusername","$dbpassword","$db");

	if($conn){
		echo"";
	}else{
		die("Connection failed: ".mysqli_connect_error());
	}

	if(isset($_POST["add_to_cart"]))
	{
		if(isset($_SESSION["shopping_cart"]))
		{
			$item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
			if(! in_array($_POST["hidden_id"],$item_array_id))
			{
				$count=count($_SESSION["shopping_cart"]);
				$item_array = array(
					'item_id' 		=>	$_POST["hidden_id"],
					'item_name' 	=>	$_POST["hidden_name"],
					'item_qty' 		=>	$_POST["hidden_qty"],
					'item_price' 	=>	$_POST["hidden_price"],
					'item_fname' 	=>	$_POST["hidden_farmer_name"]
				);
				$_SESSION["shopping_cart"][$count] = $item_array;
			}
			else{
				echo "<h3> Item Already Added .. </h3>";
			}
		}
		else{
			$item_array = array(
				'item_id' 		=>	$_POST["hidden_id"],
				'item_name' 	=>	$_POST["hidden_name"],
				'item_qty' 		=>	$_POST["hidden_qty"],
				'item_price' 	=>	$_POST["hidden_price"],
				'item_fname' 	=>	$_POST["hidden_farmer_name"]
			);
			$_SESSION["shopping_cart"][0] = $item_array;
		}
	}
?>

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
			<div>Digital Farmer's Customer </div>
			<ul>
				<li><a href="customer_home.html">Home</a></li>
				<li><a href="advertise.html">Crop Advertisement </a></li>
				<li><a href="customer_profile.html">My Profile </a></li>
				<li><a href="index.html">Logout</a></li>
			</ul>
		</div>

		<div class="container" style="width:700px;">
		
			<h3 align="center"> Shopping Cart </h3><br>
			<?php
				$query="SELECT * FROM product ORDER BY prod_id ASC";
				$result=mysqli_query($conn,$query);

				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
			?>

				<div>
					<table>
						<form method="POST" action="shopping_cart.php ? action=add&prod_id=<?php echo $row["prod_id"];  ?> " >
					
						<div style="border:1px solid; border-radius:3px;">
							<img src="<?php echo $row["image"]; ?>"><br>

							<h4> <?php echo $row["prod_name"]; ?></h4>
							<h4> <?php echo $row["quantity"]; ?></h4>
							<h4> <?php echo $row["price"]; ?></h4>
							<input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>">
							<input type="hidden" name="hidden_name" value="<?php echo $row["prod_name"]; ?>">
							<input type="hidden" name="hidden_qty" value="<?php echo $row["quantity"]; ?>">
							<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
							<input type="hidden" name="hidden_farmer_name" value="<?php echo $row["name"]; ?>">
							<input type="submit" name="add_to_cart"  style="margin-top:5px;"value="Add to Cart ! ">
						</div>
						</form>
					</table>
				</div>
			<?php
					
					}
				}
			?>
			
			<div>
				<h3> Order Details </h3>
				<div>
					<table>
						<tr>
							<th> Item ID </th> 
							<th>  Item Name   </th> 
							<th> Item Quantity  </th>
							<th> Item Price  </th>
							<th>  Farmer Name </th>
						</tr>
						<?php
							if(! empty($_SESSION["shopping_cart"]))
							{
								foreach($_SESSION["shopping_cart"] as $keys => $values)
								{
						?>
							<tr>
								<td> <?php echo $values["item_id"]; ?> </td>
								<td> <?php echo $values["item_name"]; ?> </td>
								<td> <?php echo $values["item_qty"]; ?> </td>
								<td> <?php echo $values["item_price"]; ?></td>
								<td> <?php echo $values["item_fname"]; ?> </td>
							</tr>
						<?php
								}
							}
						?>
					</table>	
				</div>
			</div>

		</div>
	</body>
</html>
















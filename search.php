
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	include('dbconnection.php');
	$prod_name=$_POST['prod_name'];
	$query="SELECT * FROM products WHERE prod_name='$prod_name'";
	$result=mysqli_query($conn,$query);?>

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
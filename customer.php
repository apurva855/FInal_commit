<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	include('dbconnection.php');
	$name=$_POST['name'];
	$crop_name1=$_POST['crop_name'];
	$contact=$_POST['contact'];
	$qty=$_POST['crop_qty'];

	$query="INSERT INTO customer (name,crop_name,contact,quantity) VALUES('$name','$crop_name1','$contact','$qty')";
	$data=mysqli_query($conn,$query);
	if($data)
	{

	$query1="SELECT * FROM customer";
	$result=mysqli_query($conn,$query1);?>
	<table border="2px" align="center" style="width:1000px; line-height: 40px;">
		<tr>
			<th>Name</th>
			<th>crop Name</th>
			<th>Contact</th>
			<th>Quantity</th>
		</tr>
		<?php
	while($row=mysqli_fetch_array($result))
	{
	?>

		<tr>
			<td><?php echo $row["name"]; ?></td>
			<td><?php echo $row["crop_name"]; ?></td>
			<td><?php echo $row["contact"]; ?></td>
			<td><?php echo $row["quantity"]; ?></td>
		</tr>
		

	<?php
	}
	}?>
	</table>

	</body>
	</html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include('dbconnection.php');
$name=$_POST['name'];
$prod_name=$_POST['prod_name'];
$userid=$_POST['userid'];
$image1=$_POST['image'];
$qty=$_POST['prod_qty'];
$price=$_POST['prod_price'];

$query="INSERT INTO products (name,userid,prod_name,,image,quantity,price) VALUES('$name','$userid','$prod_name','$image1','$qty','$price')";
$data=mysqli_query($conn,$query);
if($data)
{

$query1="SELECT * FROM products";
$result=mysqli_query($conn,$query1);?>
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
		<td><?php echo $row["image"]; ?></td>
		<td><?php echo $row["quantity"]; ?></td>
		<td><?php echo $row["price"]; ?></td>
	</tr>
	

<?php
}
}?>
</table>

</body>
</html>
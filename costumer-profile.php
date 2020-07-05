<?php
		
		$conn=mysqli_connect('localhost','root','','costumer');
	if(!$conn)
	{
		die('Connection Failed:'.mysqli_connect_error());
	}else{

	//required(display-customer-profile.html);
	//function getdata($username){	
		
		$array=array();

		$q=mysqli_query($conn,"SELECT * FROM customer WHERE username=".$username);
		while($result= mysqli_fetch_assoc($q))
		{ 
		   $array['fname']=$result['fname']
			$array['address']=$result['address']
			$array['contact']=$result['contact']
			$array['username']=$result['username']
		
		}
		//return $array;
		
	}
<table>
<tr>
<td><?php echo $result['name']?></td>
</tr>
<tr>
<td><?php echo $result['address']?></td>
</tr>
<tr>
<td><?php echo $result['contact']?></td>
</tr>
<tr>
<td><?php echo $result['username']?></td>
</tr>
</table>
?>
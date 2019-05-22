<?php
$con=mysqli_connect('localhost','root','','test');
$q="select* from user";
$result=mysqli_query($con,$q);
?>

<html>
<head>	
	<title>UpdatedInfo</title>
	<link href="Style.css" rel="stylesheet" type="text/css">

</head>
<body>
<center>
	<h1 class="h1">The Sparks Foundation</h1><hr>
    <div>
	<fieldset>
		<legend><B>Total User</B></legend>
		<h3>Updated Data</h3>
		<table width='80%' border='1' style="border-collapse:collapse;">
		<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Email</td>
		<td>Credit</td>
		</tr>
	
			<?php 
			while($res = mysqli_fetch_array($result)) { 		
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['credit']."</td>";	
			}
			?>
		</table>
	</fieldset>	

			<td><a href="fromTransfer.php"><strong>Select User</strong></a>
			<br> 
			<td><a href="index.php"><strong>Home</strong></a> 
    
	</div>	
</center>
</body>
</html>
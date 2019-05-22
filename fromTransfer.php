<?php
$con=mysqli_connect('localhost','root','','test');
$q="select name from user";
$result=mysqli_query($con,$q);
?>

<html>
<head>
	<title>FromTransfer</title>
		<link href="Style.css" rel="stylesheet" type="text/css">	 
</head>
<body>
	<center>
	<h1 class="h1">The Sparks Foundation</h1><hr>
    <div>
	<fieldset>
	<legend><B>Select one User</B></legend>
	<form  action="specificUser.php" method="post">
		<table cellspacing=50px>
			<tr>
			<td> <b>Select User :</b></td>
			<td>
			<select name="name" onchange="this.form.submit()">
				<option>Select</option>
				<?php  
				while($row = $result->fetch_assoc()) {
				?>
				<option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>
				<?php }
				?>
			</select>
			</td>
			</tr>
        </table>
	</form>
	</fieldset>
	</div>
	</center>	
</body>
</html>

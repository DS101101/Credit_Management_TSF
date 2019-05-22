<?php
session_start();
$con=mysqli_connect('localhost','root','','test');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>ToTransfer</title>
		<link href="Style.css" rel="stylesheet" type="text/css">

		<style>
			
		  #credit{ 
            margin-top: 50px;
           }
		
		</style>
	
		
</head>
<body>
<center>
	<h1 class="h1">The Sparks Foundation</h1><hr>
    <div>
	<fieldset>
	<legend><B>To transfer the credit</B></legend>
       <form action="transferCredit.php" method="post">
		<table>
			<h3>Select at least one name to transfer the credit</h3>
			<?php  
			while($row = $result->fetch_assoc()) {
			?>
			<tr>
			<td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
			</tr>
			<?php }
			?>
	
			<tr>
			<td><input type="submit" value="credit" style=" margin-top: 40px;"></td>
			</tr>
	
        </table>
        </form>
	</fieldset>
	</div>
</center>
</body>
</html>

<?php
session_start();
$con=mysqli_connect('localhost','root','','test');
$q="select name from user";
$result=mysqli_query($con,$q);
$_SESSION['to']=$_POST["transfer"];
?>

<html>
<head>
   <title>Transfer</title>
   	<link href="Style.css" rel="stylesheet" type="text/css">
 <!--  <style>
       
    </style> -->
</head>
<body>
	<center>
	<h1 class="h1">The Sparks Foundation</h1><hr>
    <div>
	<fieldset>
		<legend><b>Amount to be transfered</b></legend>
		<form action="creditValidation.php" method="post">
			<div style=" margin-top: 40px;">
				<b>Amount:</b> 
				<br>
				<input type="number" name="transfer" required><br>
				<input type="submit" value="transfer" style=" margin-top: 40px;">
			</div>
		</form>
	</fieldset>
	</div>
    </center>
</body>
</html>

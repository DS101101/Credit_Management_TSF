<?php 
session_start();
$con=mysqli_connect('localhost','root','','test');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
?>
<html>
<head>
   <title>SpecificUser</title>
		<link href="Style.css" rel="stylesheet" type="text/css">
  
	<style>
	    th,td,table{
            border-collapse: collapse;
            font-size: 30px;
            margin-top: 50px;
            margin-left: 0%;
			margin-right: 0%;
            padding: 20px;
            border: 1px solid black;
            size: 30px;
        }
		
		#transfer{
            margin-top: 80px;    
        }
	</style>
</head>
<body>
	<center>
	<h1 class="h1">The Sparks Foundation</h1>	<hr> 
	<div>
	<fieldset>
	<legend><B>Single User Information</B></legend>
       <table>
        <div>  
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		</div>
			<tr>
           <?php  
				$row=mysqli_fetch_array($result);
           ?>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["credit"]; ?></td>
			</tr>
        </table>
		<div>
			<form action="toTransfer.php" method="post">
				<div id="transfer">
				<input type="submit" value="TransferTo">
				</div>
			</form>
		</div>
	</fieldset>
	</div>
	</center>
</body>
</html>
<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>
<style type="text/css">
body{
	background-image:url('<?php echo $profpic;?>');
	background-repeat: no-repeat;
	background-position:center;
	background-size:cover;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title>Insert into database</title>
</head>
<body>
<center><h2>Insert into Supplier table</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="#fff">
<br>
<tr><td><b>Supplier ID </b></td><td><input type="text" name="suppID" value=""/>	</td></tr>
<tr><td><b>Name </b></td><td><input type="text" name="suppName" value=""/>	</td></tr>
<tr><td><b>Contact </b></td><td><input type="text" name="contact" value=""/></td></tr>
<tr><td><b>Address </b></td><td><input type="text" name="suppAdd" value=""/></td></tr>
<tr><td><b>Start Date </b></td><td><input type="date" name="startDate" value=""/></td></tr>
<tr><td><b>Cost </b></td><td><input type="text" name="cos" value=""/>  </td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Insert"/></center></td></tr>
</center>

</form>

<?php
if($_GET['submit'])
{
	$sid=$_GET['suppID'];
	$sname=$_GET['suppName'];
	$contact=$_GET['contact'];
	$add=$_GET['suppAdd'];
	$sdate=$_GET['startDate'];
	$pri=$_GET['cos'];
	if($sid!="" && $sname!="" && $contact!="" && $add!="" && $sdate!="" && $pri!="")
	{
		$query = "INSERT INTO suppliers values('$sid','$sname','$contact','$add','$sdate','$pri')";
		$data = mysqli_query($conn ,$query);
		
		if($data)
		{
			echo "<center><h2>Insertion successful!!  <a href = 'suppliers.php'>Back</a></h2></center>";
		}
		else
		{
			echo '<center><h2><span style="color:red;text-align:center;">This Id number already exists !<a href="suppliers.php"> Back</a></span></h2></center>';
		}	
		
		
	}
	
	else
	{
		echo "<center><h2>All fields required</h2></center>";
	}	
}

?>

</body>
</html>
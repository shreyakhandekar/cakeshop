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
<center><h2>Insert into Package table</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="white">
<br>
<tr><td><b>ID </b></td><td><input type="text" name="productID" value=""/>	</td></tr>
<tr><td><b>Type of package </b></td><td><input type="text" name="packageTyp" value=""/>	</td></tr>
<tr><td><b>Size </b></td><td><input type="text" name="packageSize" value=""/>	</td></tr>
<tr><td><b>Cost </b></td><td><input type="text" name="cos" value=""/>	</td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Insert"/></center></td></tr>
</center>
</form>

<?php
if($_GET['submit'])
{
	$pid=$_GET['productID'];
	$ptype=$_GET['packageTyp'];
	$sz=$_GET['packageSize'];
	$pri=$_GET['cos'];
	if($pid!="" && $ptype!="" && $sz!="" && $pri!="" )
	{
		$query = "INSERT INTO package values('$pid','$ptype','$sz','$pri')";
		$data = mysqli_query($conn ,$query);
		
		if($data)
		{
			echo "<center><h2>Insertion successful!!  <a href = 'package.php'>Back</a></h2></center>";
		}
		else
		{
			echo '<center><h2><span style="color:red;text-align:center;">This Id number already exists !<a href="package.php"> Back</a></span></h2></center>';
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
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
<center><h2>Insert into Request table</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="#fff">
<br>
<tr><td><b>Purchase ID </b></td><td><input type="text" name="purID" value=""/> </td></tr>
<tr><td><b>Order Date </b></td><td><input type="date" name="orDate" value=""/>	</td></tr>
<tr><td><b>Delivery Time </b></td><td><input type="text" name="dTime" value=""/> </td></tr>
<tr><td><b>Price </b></td><td><input type="text" name="Price" value=""/> </td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Insert"/></center></td></tr>
</center>

</form>

<?php
if($_GET['submit'])
{
	$id = $_GET['purID'];
	$order = $_GET['orDate'];
	$delivery=$_GET['dTime'];
	$pri=$_GET['Price'];
		
	if($id!="" && $order!="" && $delivery!="" && $pri!="" )
	{
		$query = "INSERT INTO request values('$id','$order','$delivery','$pri')";
		$data = mysqli_query($conn ,$query);
		
		if($data)
		{
			echo "<center><h2>Insertion successful!!  <a href = 'request.php'>Back</a></h2></center>";
		}
		else
		{
			echo '<center><h2><span style="color:red;text-align:center;">This Id number already exists !<a href="request.php"> Back</a></span></h2></center>';
		}	
		
		
	}
	
	else
	{
		echo "<center><h2>All fields required</h2></center>";
	}	
}
mysqli_close($conn);
?>

</body>
</html>
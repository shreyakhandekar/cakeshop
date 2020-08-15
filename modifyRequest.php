 <?php
include("connection.php");
error_reporting(0);
?>

<?php
$_GET['p_id'];
$_GET['orderd'];
$_GET['delivery'];
$_GET['pri'];
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

<title>THE CAKESHOP</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  </head>
<body>
<center><h2>Modify in Request Table</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="#fff">
<br>
<tr><td><b>Purchase ID </b></td><td><input type="text" name="purchaseID" value="<?php echo $_GET['p_id']; ?>"/>	</td></tr>
<tr><td><b>Order Date </b></td><td><input type="date" name="orderdate" value="<?php echo $_GET['orderd']; ?>"/>	</td></tr>
<tr><td><b>Delivery Time </b></td><td><input type="text" name="Delivery" value="<?php echo $_GET['delivery']; ?>"/>	</td></tr>
<tr><td><b>Price </b></td><td><input type="text" name="price" value="<?php echo $_GET['pri']; ?>"/>	</td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Update"/></center></td></tr>
</center>

</form>

<?php
if($_GET['submit'])
{
	$p_id = $_GET['purchaseID'];
	$orderd = $_GET['orderdate'];
	$delivery=$_GET['Delivery'];
	$pri=$_GET['price'];
	$query = "UPDATE request SET orderdate = '$orderd',deliverytime='$delivery',totalprice='$pri' where purchase_id = '$p_id' ";
	$data = mysqli_query($conn , $query);
	
	if($data)
	{
		echo "<center><h2>Updated !!	<a href = 'request.php'>Back</a></h2></center>";
	}
	else
	{
		echo "<center><h2>Failed !! Updated record already exists</h2></center>";
	}
}
?>
</body>
</html>


<?php
include("connection.php");
error_reporting(0);
$_GET['cid'];
$_GET['c_name'];
$_GET['add'];
$_GET['Contact'];
$_GET['pri'];
$_GET['order'];
$_GET['purchase'];
$_GET['wt'];
$_GET['flavour'];
$_GET['shape'];
$_GET['req'];
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
</head>
<body>
<center><h2>Modify in Customer Table</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="#fff">
<br>
<tr><td><b>Customer ID</b></td><td> <input type="text" name="custID" value="<?php echo $_GET['cid']; ?>"/>	</td></tr>
<tr><td><b>Name </b></td><td><input type="text" name="Name" value="<?php echo $_GET['c_name']; ?>"/>	</td></tr>
<tr><td><b>Address </b></td><td><input type="text" name="Address" value="<?php echo $_GET['add']; ?>"/>	</td></tr>
<tr><td><b>Contact</b></td><td> <input type="text" name="Contact" value="<?php echo $_GET['Contact']; ?>"/>	</td></tr>
<tr><td><b>Cost </b></td><td><input type="text" name="Cost" value="<?php echo $_GET['pri']; ?>"/>	</td></tr>
<tr><td><b>Order </b></td><td><input type="date" name="Order" value="<?php echo $_GET['order']; ?>"/>	</td></tr>
<tr><td><b>Purchase </b></td><td><input type="date" name="Purchase" value="<?php echo $_GET['purchase']; ?>"/></td></tr>
<tr><td><b>Weight in kg</b></td><td><input type="text" name="weight" value="<?php echo $_GET['wt']; ?>"/>	</td></tr>
<tr><td><b>Flavours </b></td><td><input type="text" name="flavours" value="<?php echo $_GET['flavour']; ?>"/>	</td></tr>
<tr><td><b>Shapes </b></td><td><input type="text" name="Shapes" value="<?php echo $_GET['shape']; ?>"/>	</td></tr>
<tr><td><b>Requirements </b></td><td><input type="text" name="Req" value="<?php echo $_GET['req']; ?>"/>	</td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Update"/></center></td></tr>
</center>

</form>

<?php
if($_GET['submit'])
{
	$id = $_GET['custID'];
	$name = $_GET['Name'];
	$add = $_GET['Address'];
	$contact = $_GET['Contact'];
	$price = $_GET['Cost'];
	$order = $_GET['Order'];
	$purchase = $_GET['Purchase'];
	$Wt = $_GET['weight'];
	$Fla = $_GET['flavours'];
	$Shape = $_GET['Shapes'];
	$req = $_GET['Req'];

	$query = "UPDATE customer SET cname = '$name',c_address = '$add',contact = '$contact',cost = '$price',orderdate = '$order',purchasedate = '$purchase' where customer_id = '$id' ";
	$query1 = "UPDATE requirement SET kgs = '$Wt', flavours = '$Fla',shapes = '$Shape',customizedreq = '$req' where customer_id = '$id' ";
	$data = mysqli_query($conn , $query);
	$data1 = mysqli_query($conn , $query1);
	
	if($data)
	{
		if($data1)
		{
		echo "<center><h2>Updated !!	<a href = 'customer.php'>Back</a></h2></center>";
		}
	}	
	else
	{
		echo "<center><h2>Failed !! Updated record already exists</h2></center>";
	}
}
?>
</body>
</html>
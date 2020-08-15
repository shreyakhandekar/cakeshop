<?php
include("connection.php");
error_reporting(0);
$_GET['pid'];
$_GET['p_name'];
$_GET['comp'];
$_GET['quan'];
$_GET['pri'];
$_GET['mfg'];
$_GET['exp'];
$_GET['typ'];
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
<center><h2>Do you want to delete this record?</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="#fff">
<br>
<tr><td><b>Product ID </b></td><td><input type="text" name="proID" value="<?php echo $_GET['pid']; ?>"/></td></tr>
<tr><td><b>Product Name </b></td><td><input type="text" name="proName" value="<?php echo $_GET['p_name']; ?>"/></td></tr>
<tr><td><b>Supplier Name </b></td><td><input type="text" name="Comp" value="<?php echo $_GET['comp']; ?>"/>	</td></tr>
<tr><td><b>Quantity </b></td><td><input type="text" name="quanti" value="<?php echo $_GET['quan']; ?>"/>	</td></tr>
<tr><td><b>Cost </b></td><td><input type="text" name="Price" value="<?php echo $_GET['pri']; ?>"/>	</td></tr>
<tr><td><b>Mfg date </b></td><td><input type="text" name="MFG" value="<?php echo $_GET['mfg']; ?>"/></td></tr>
<tr><td><b>Exp date </b></td><td><input type="text" name="EXP" value="<?php echo $_GET['exp']; ?>"/></td></tr>
<tr><td><b>Type </b></td><td><input type="text" name="TYPE" value="<?php echo $_GET['typ']; ?>"/></td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Delete"/></center></td></tr>
</center>
</form>

<?php



if($_GET['submit'])
{
	$id = $_GET['proID'];
	
	$query = "DELETE from product where product_id = '$id' ";
	$data = mysqli_query($conn , $query);

	if($data)
	{
		echo "<center><h2>Deleted !!	<a href = 'product.php'>Back</a></h2></center>";
	}
	else
	{
		echo "<center><h2>Failed !!</h2></center>";
	}
}
?>
</body>
</html>
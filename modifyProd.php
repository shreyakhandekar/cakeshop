<?php
include("connection.php");
error_reporting(0);
?>
<?php
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

<title>THE CAKESHOP</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  </head>
  <body>
  <center><h2>Modify in Product Table</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="#fff">
<br>
<tr><td><b>Product ID </b></td><td><input type="text" name="productID" value="<?php echo $_GET['pid']; ?>"/>	</td></tr>
<tr><td><b>Product Name </b></td><td><input type="text" name="productName" value="<?php echo $_GET['p_name']; ?>"/>	</td></tr>
<tr><td><b>Supplier Name </b></td><td><input type="text" name="companyName" value="<?php echo $_GET['comp']; ?>"/>	</td></tr>
<tr><td><b>Quantity </b></td><td><input type="text" name="quant" value="<?php echo $_GET['quan']; ?>"/>	</td></tr>
<tr><td><b>Price </b></td><td><input type="text" name="Price" value="<?php echo $_GET['pri']; ?>"/></td></tr>
<tr><td><b>Mfg_date(yy-mm-dd) </b></td><td><input type="text" name="mfgDate" value="<?php echo $_GET['mfg']; ?>"/>	</td></tr>
<tr><td><b>Exp_date(yy-mm-dd) </b></td><td><input type="text" name="expDate" value="<?php echo $_GET['exp']; ?>"/>	</td></tr>
<tr><td><b>Type </b></td><td><input type="text" name="Type" value="<?php echo $_GET['typ']; ?>"/></td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Update"/></center></td></tr>
</center>

</form>

<?php
if(isset($_GET['submit']))
{
	$id = $_GET['productID'];
	$name = $_GET['productName'];
	$company=$_GET['companyName'];
	$quanti=$_GET['quant'];
	$pri=$_GET['Price'];
	$mfg=$_GET['mfgDate'];
	$exp=$_GET['expDate'];
	$typ=$_GET['Type'];
	$query = "UPDATE product SET pname = '$name',sname='$company',quantity='$quanti',price='$pri',mfg_date='$mfg',exp_date='$exp',type='$typ' where product_id = '$id' ";
	$data = mysqli_query($conn , $query);
	
	if($data)
	{
		echo "<center><h2>Updated !!	<a href = 'product.php'>Back</a></h2></center>";
	}
	else
	{
		echo "<center><h2>Failed !! Updated record already exists</h2></center>";
	}
}
?>
</body>
</html>


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
<center><h2>Insert into Product table</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="white">
<br>
<tr><td><b>ID </b></td><td><input type="text" name="productID" value=""/> </td></tr>
<tr><td><b>Name </b></td><td><input type="text" name="productName" value=""/>	</td></tr>
<tr><td><b>Supplier Name </b></td><td><input type="text" name="company" value=""/> </td></tr>
<tr><td><b>Quantity </b></td><td><input type="text" name="quant" value=""/> </td></tr>
<tr><td><b>Price </b></td><td><input type="text" name="price" value=""/> </td></tr>
<tr><td><b>Mfg_date </b></td><td><input type="text" name="mfgDate" value=""/> </td><td>(yy-mm-dd)</td></tr>
<tr><td><b>Exp_date </b></td><td><input type="text" name="expDate" value=""/> </td><td>(yy-mm-dd)</td></tr>
<tr><td><b>Type </b></td><td><br>( Cake/Pastry/Others )</br><input type="text" name="type" value=""/> </td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Insert"/></center></td></tr>
</center>

</form>

<?php
if(isset($_GET['submit']))
{
	$id = $_GET['productID'];
	$name = $_GET['productName'];
	$comp=$_GET['company'];
	$quanti=$_GET['quant'];
	$pri=$_GET['price'];
	$mfg=$_GET['mfgDate'];
	$exp=$_GET['expDate'];
	$typ=$_GET['type'];
	
	
	if($id!="" && $name!="" && $comp!="" && $quanti!="" && $pri!="" && $mfg!="" && $exp!="" && $typ!="" )
	{
		$query = "INSERT INTO product values('$id','$name','$comp','$quanti','$pri','$mfg','$exp','$typ')";
		$data = mysqli_query($conn ,$query);
		
		if($data)
		{
			echo "<center><h2>Insertion successful!!  <a href = 'product.php'>Back</a></h2></center>";
		}
		else
		{
			echo '<center><h2><span style="color:red;text-align:center;">This Id number already exists !<a href="product.php"> Back</a></span></h2></center>';
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
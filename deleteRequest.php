<?php
include("connection.php");
error_reporting(0);
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
</head>
<body>
<center><h2>Do you want to delete this record?</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="#fff">
<br>
<tr><td><b>Purchase ID </b></td><td><input type="text" name="purID" value="<?php echo $_GET['p_id']; ?>"/></td></tr>
<tr><td><b>Order Date </b></td><td><input type="date" name="order" value="<?php echo $_GET['orderd']; ?>"/></td></tr>
<tr><td><b>Delivery Time </b></td><td><input type="text" name="deliv" value="<?php echo $_GET['delivery']; ?>"/></td></tr>
<tr><td><b>Cost </b></td><td><input type="text" name="cost" value="<?php echo $_GET['pri']; ?>"/></td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Delete"/></center></td></tr>
</center>
</form>

<?php



if($_GET['submit'])
{
	$id = $_GET['purID'];
	
	$query = "DELETE from request where purchase_id = '$id' ";
	$data = mysqli_query($conn , $query);

	if($data)
	{
		echo "<center><h2>Deleted !!	<a href = 'request.php'>Back</a></h2></center>";
	}
	else
	{
		echo "<center><h2>Failed !!</h2></center>";
	}
}
?>
</body>
</html>
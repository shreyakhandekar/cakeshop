<?php
include("connection.php");
error_reporting(0);
$_GET['sid'];
$_GET['sname'];
$_GET['num'];
$_GET['add'];
$_GET['doj'];
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
<center><h2>Modify in Supplier Table</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="#fff">
<br>
<tr><td><b>Supplier ID </b></td><td><input type="text" name="suppID" value="<?php echo $_GET['sid']; ?>"/>	</td></tr>
<tr><td><b>Name </b></td><td><input type="text" name="suppName" value="<?php echo $_GET['sname']; ?>"/>	</td></tr>
<tr><td><b>Contact </b></td><td><input type="text" name="Contact" value="<?php echo $_GET['num']; ?>"/>	</td></tr>
<tr><td><b>Address </b></td><td><input type="text" name="Address" value="<?php echo $_GET['add']; ?>"/>	</td></tr>
<tr><td><b>Join date </b></td><td><input type="date" name="joinDate" value="<?php echo $_GET['doj']; ?>"/>	</td></tr>
<tr><td><b>Cost </b></td><td><input type="num" name="cos" value="<?php echo $_GET['pri']; ?>"/>	</td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Update"/></center></td></tr>
</center>

</form>

<?php
if($_GET['submit'])
{
	$id = $_GET['suppID'];
	$name = $_GET['suppName'];
	$num = $_GET['Contact'];
	$add = $_GET['Address'];
	$doj = $_GET['joinDate'];
	$pri = $_GET['cos'];
	$query = "UPDATE suppliers SET sname = '$name',contact='$num',address='$add',start_date='$doj',cost='$pri' where supplier_id = '$id' ";
	$data = mysqli_query($conn , $query);
	
	if($data)
	{
		echo "<center><h2>Updated !!	<a href = 'suppliers.php'>Back</a></h2></center>";
	}
	else
	{
		echo "<center><h2>Failed !! Updated record already exists</h2></center>";
	}
}
?>
</body>
</html>
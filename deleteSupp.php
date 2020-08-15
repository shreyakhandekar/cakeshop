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
<center><h2>Do you want to delete this record?</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="#fff">
<br>
<tr><td><b>Supplier ID </b></td><td><input type="text" name="suppID" value="<?php echo $_GET['sid']; ?>"/></td></tr>
<tr><td><b>Supplier Name </b></td><td><input type="text" name="suppName" value="<?php echo $_GET['sname']; ?>"/></td></tr>
<tr><td><b>Contact </b></td><td><input type="text" name="phone" value="<?php echo $_GET['num']; ?>"/></td></tr>
<tr><td><b>Address </b></td><td><input type="text" name="ad" value="<?php echo $_GET['add']; ?>"/></td></tr>
<tr><td><b>Start Date </b></td><td><input type="date" name="sDate" value="<?php echo $_GET['doj']; ?>"/>	</td></tr>
<tr><td><b>Cost </b></td><td> <input type="num" name="cos" value="<?php echo $_GET['pri']; ?>"/>	</td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Delete"/></center></td></tr>
</center>
</form>

<?php



if($_GET['submit'])
{
	$id = $_GET['suppID'];
	
	$query = "DELETE from suppliers where supplier_id = '$id' ";
	$data = mysqli_query($conn , $query);

	if($data)
	{
		echo "<center><h2>Deleted !!	<a href = 'suppliers.php'>Back</a></h2></center>";
	}
	else
	{
		echo "<center><h2>Failed !!</h2></center>";
	}
}
?>
</body>
</html>
<?php
include("connection.php");
error_reporting(0);
$_GET['pid'];
$_GET['ptype'];
$_GET['sz'];
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
<tr><td><b>Package ID </b></td><td><input type="text" name="packID" value="<?php echo $_GET['pid']; ?>"/></td></tr>
<tr><td><b>Package type</b></td><td> <input type="text" name="pType" value="<?php echo $_GET['ptype']; ?>"/></td></tr>
<tr><td><b>Package size </b></td><td><input type="text" name="pSize" value="<?php echo $_GET['sz']; ?>"/></td></tr>
<tr><td><b>Cost </b></td><td><input type="Num" name="Cost" value="<?php echo $_GET['pri']; ?>"/></td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Delete"/></center></td></tr>
</center>
</form>

<?php



if($_GET['submit'])
{
	$id = $_GET['packID'];
	
	$query = "DELETE from package where p_id = '$id' ";
	$data = mysqli_query($conn , $query);

	if($data)
	{
		echo "<center><h2>Deleted !!	<a href = 'package.php'>Back</a></h2></center>";
	}
	else
	{
		echo "<center><h2>Failed !!</h2></center>";
	}
}
?>
</body>
</html>
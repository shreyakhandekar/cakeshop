<?php
include("connection.php");
error_reporting(0);
$_GET['sid'];
$_GET['sname'];
$_GET['des'];
$_GET['sal'];
$_GET['doj'];
$_GET['num'];
$_GET['hrs'];
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
<tr><td><b>Staff ID </b></td><td><input type="text" name="stID" value="<?php echo $_GET['sid']; ?>"/></td></tr>
<tr><td><b>Staff Name </b></td><td><input type="text" name="stName" value="<?php echo $_GET['sname']; ?>"/></td></tr>
<tr><td><b>Designation </b></td><td><input type="text" name="desig" value="<?php echo $_GET['des']; ?>"/></td></tr>
<tr><td><b>Salary </b></td><td><input type="text" name="sal" value="<?php echo $_GET['sal']; ?>"/></td></tr>
<tr><td><b>Start Date </b></td><td><input type="date" name="sDate" value="<?php echo $_GET['doj']; ?>"/></td></tr>
<tr><td><b>Contact </b></td><td><input type="text" name="phone" value="<?php echo $_GET['num']; ?>"/></td></tr>
<tr><td><b>Working Hours </b></td><td><input type="text" name="hours" value="<?php echo $_GET['hrs']; ?>"/></td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Delete"/></center></td></tr>
</center>
</form>

<?php



if($_GET['submit'])
{
	$id = $_GET['stID'];
	
	$query = "DELETE from staff where staff_id = '$id' ";
	$data = mysqli_query($conn , $query);

	if($data)
	{
		echo "<center><h2>Deleted !!	<a href = 'staff.php'>Back</a></h2></center>";
	}
	else
	{
		echo "<center><h2>Failed !!</h2></center>";
	}
}
?>
</body>
</html>
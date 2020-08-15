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
<center><h2>Modify in Staff Table</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="#fff">
<br>
<tr><td><b>Staff ID </b></td><td><input type="text" name="staffID" value="<?php echo $_GET['sid']; ?>"/>	</td></tr>
<tr><td><b>Name </b></td><td><input type="text" name="staffName" value="<?php echo $_GET['sname']; ?>"/>	</td></tr>
<tr><td><b>Designation </b></td><td><input type="text" name="Designation" value="<?php echo $_GET['des']; ?>"/>	</td></tr>
<tr><td><b>Salary </b></td><td><input type="text" name="Salary" value="<?php echo $_GET['sal']; ?>"/>	</td></tr>
<tr><td><b>Join Date </b></td><td><input type="date" name="dateJoin" value="<?php echo $_GET['doj']; ?>"/>	</td></tr>
<tr><td><b>Contact </b></td><td><input type="text" name="contactNum" value="<?php echo $_GET['num']; ?>"/>	</td></tr>
<tr><td><b>Working hrs </b></td><td><input type="text" name="workHrs" value="<?php echo $_GET['hrs']; ?>"/>	</td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Update"/></center></td></tr>
</center>

</form>

<?php
if($_GET['submit'])
{
	$id = $_GET['staffID'];
	$name = $_GET['staffName'];
	$des = $_GET['Designation'];
	$sal = $_GET['Salary'];
	$doj = $_GET['dateJoin'];
	$num = $_GET['contactNum'];
	$hrs = $_GET['workHrs'];
	$query = "UPDATE staff SET staff_name = '$name',designation='$des',salary='$sal',joindate='$doj',contact='$num',workinghours='$hrs' where staff_id = '$id' ";
	$data = mysqli_query($conn , $query);
	
	if($data)
	{
		echo "<center><h2>Updated !!	<a href = 'staff.php'>Back</a></h2></center>";
	}
	else
	{
		echo "<center><h2>Failed !! Updated record already exists</h2></center>";
	}
}
?>
</body>
</html>
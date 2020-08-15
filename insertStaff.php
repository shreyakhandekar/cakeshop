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
<center><h2>Insert into Staff table</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="#fff">
<br>
<tr><td><b>ID </b></td><td><input type="text" name="staffID" value=""/>	</td></tr>
<tr><td><b>Name </b></td><td><input type="text" name="staffName" value=""/>	</td></tr>
<tr><td><b>Designation </b></td><td><input type="text" name="Designation" value=""/></td></tr>
<tr><td><b>Salary </b></td><td><input type="text" name="Salary" value=""/></td></tr>
<tr><td><b>Date of join </b></td><td><input type="date" name="joinDate" value=""/></td></tr>
<tr><td><b>Contact </b></td><td><input type="text" name="contactNo" value=""/></td></tr>
<tr><td><b>Working hrs </b></td><td><input type="text" name="workingHrs" value=""/></td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Insert"/></center></td></tr>
</center>

</form>

<?php
if($_GET['submit'])
{
	$sid=$_GET['staffID'];
	$sname=$_GET['staffName'];
	$des=$_GET['Designation'];
	$sal=$_GET['Salary'];
	$doj=$_GET['joinDate'];
	$num=$_GET['contactNo'];
	$hrs=$_GET['workingHrs'];
	
	if($sid!="" && $sname!="" && $des!="" && $sal!="" && $doj!="" && $num!="" && $hrs!="")
	{
		$query = "INSERT INTO staff values('$sid','$sname','$des','$sal','$doj','$num','$hrs')";
		$data = mysqli_query($conn ,$query);
		
		if($data)
		{
			echo "<center><h2>Insertion successful!!  <a href = 'staff.php'>Back</a></h2></center>";
		}
		else
		{
			echo '<center><h2><span style="color:red;text-align:center;">This Id number already exists !<a href="staff.php"> Back</a></span></h2></center>';
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
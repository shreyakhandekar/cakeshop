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
<center><h2>Insert into Customer table</h2></center>
<font size="10" face="Arial" >
<center>
<form action="" method="GET">
<table bgcolor="#fff">
<br>
<tr><td><b>Customer ID </b></td><td><input type="text" name="custID" value=""/></td></tr>
<tr><td><b>Name </b></td><td><input type="text" name="custName" value=""/></td></tr>
<tr><td><b>Address </b></td><td><input type="text" name="custAdd" value=""/></td></tr>
<tr><td><b>Contact </b></td><td><input type="text" name="Contact" value=""/>	</td></tr>
<tr><td><b>Cost </b></td><td><input type="text" name="custCost" value=""/>	</td></tr>
<tr><td><b>Ordered </b></td><td><input type="date" name="orderDate" value=""/>	</td></tr>
<tr><td><b>Purchased </b></td><td><input type="date" name="purDate" value=""/>	</td></tr>
<tr><td><b>Weight in kg</b></td><td><input type="text" name="weight" value=""/>	</td></tr>
<tr><td><b>Flavours </b></td><td><input type="text" name="flavour" value=""/>	</td></tr>
<tr><td><b>Shape </b></td><td><input type="text" name="shape" value=""/>	</td></tr>
<tr><td><b>Customized Request </b></td><td><input type="text" name="custReq" value=""/>	</td></tr>
</table>
</font>
<br><br>
<tr><td><center><input type="Submit" name="submit" value="Insert"/></center></td></tr>
</center>
</form>

<?php
if($_GET['submit'])
{
	$cid=$_GET['custID'];
	$c_name=$_GET['custName'];
	$cadd=$_GET['custAdd'];
	$num=$_GET['Contact'];
	$pri=$_GET['custCost'];
	$ord=$_GET['orderDate'];
	$pur=$_GET['purDate'];
	$wt=$_GET['weight'];
	$flav=$_GET['flavour'];
	$sh=$_GET['shape'];
	$creq=$_GET['custReq'];
	
	if($cid!="" && $c_name!="" && $cadd!="" && $num!="" && $pri!="" && $ord!="" && $pur!="" &&  $wt!="" && $flav!="" && $sh!="" && $creq!="")
	{
		$query = "INSERT INTO customer values('$cid','$c_name','$cadd','$num','$pri','$ord','$pur')";
		$query1 = "Insert INTO requirement values('$cid','$wt','$flav','$sh','$creq')";
		$data = mysqli_query($conn ,$query);
		$data1 = mysqli_query($conn ,$query1);
		if($data1)
		{
			if($data)
			{
			echo "<center><h2>Insertion successful!!  <a href = 'customer.php'>Back</a></h2></center>";
			}
			else
		{
			echo '<center><h2><span style="color:red;text-align:center;">This Id number already exists !<a href="customer.php"> Back</a></span></h2></center>';
		}	
		
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
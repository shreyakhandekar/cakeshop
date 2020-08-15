<?php
//Step1
 $db = mysqli_connect('localhost','root','','cakeshop')
 or die('Error connecting to MySQL server.');
?>

<html>
<head>
  <title>THE CAKESHOP</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
  <header>
  <ul2>
    <div class="main">
    <font size="5.5">
    <li> <a href="product.php"> PRODUCTS </a></li>
    <li><a href="customer.php">CUSTOMERS </a></li>
    <li class="active"><a href="suppliers.php"> SUPPLIERS </a></li>
    <li><a href="staff.php"> STAFF </a></li>
	<li><a href="sales.php"> SALES </a></li>
	<li><a href="about.php"> ABOUT US </a></li>
    </div>
    </ul2>
	
	<ul4>
     <div class="main1">
	<font size="5">
	<li><a href="package.php">PACKAGE</a></li>
	</div>
	</ul4>
	
	<ul5>
	<div class="main2">
	<font size="5">
	<li><a href="insertSupp.php">Insert </a></li>
	</div>
	</ul5>
	
	<ul11>
	<div class="main3">
	  <font size="5">
	<li><a href="Index.php"> Log Out </a></li>
	</div>
	</ul11>
	
    <div class="title2">
    <font size="6">
	 
	 <?php

include("connection.php");
error_reporting(0);
$query = "SELECT * FROM suppliers";
$data = mysqli_query($conn,$query);
$total_rows = mysqli_num_rows($data);

if($total_rows != 0)
{
	?>
	
	<table>
		<tr>
			<td><b>Supplier ID</b></td>
			<td><b>Supplier name</b></td>
			<td><b>Contact</b></td>
			<td><b>Address</b></td>
			<td><b>Join date</b></td>
			<td><b>Cost</b></td>
		</tr>
		
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result[supplier_id]."</td>
				<td>".$result[sname]."</td>
				<td>".$result[contact]."</td>
				<td>".$result[address]."</td>
				<td>".$result[start_date]."</td>
				<td>".$result[cost]."</td>
				<td><a href='modifySupp.php?sid=$result[supplier_id]&sname=$result[sname]&num=$result[contact]&add=$result[address]&doj=$result[start_date]&pri=$result[cost]'>Edit</a></td>
				<td><a href='deleteSupp.php?sid=$result[supplier_id]&sname=$result[sname]&num=$result[contact]&add=$result[address]&doj=$result[start_date]&pri=$result[cost]'>Delete</a></td>

			</tr>";
	}
}
else
{
	echo "Empty table";
}


?>
	</table>
	 </div>
      
 </header> 
 </body>
</html>

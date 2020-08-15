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
  <ul8>
    <div class="main">
    <font size="5.5">
     <li > <a href="product.php"> PRODUCTS </a></li>
    <li><a href="customer.php"> CUSTOMERS </a></li>
    <li><a href="suppliers.php"> SUPPLIERS </a></li>
    <li><a href="staff.php"> STAFF </a></li>
	<li><a href="sales.php"> SALES </a></li>
	<li><a href="about.php"> ABOUT US </a></li>
    </div>
    </ul8>
    
	<ul4>
	<div class="main1">
	<font size="5">
	<li><a href="request.php">BILL</a></li>
	<li class="active" ><a href="requirement.php">REQUIREMENT</a></li>
	</div>
	</ul4>
	
			
	<ul11>
	<div class="main3">
	 <font size="5">
	<li><a href="Index.php"> Log Out </a></li>
	</div>
	</ul11>
	<ul10>
    <div class="title1">
    <font size="6">
    <?php

include("connection.php");
error_reporting(0);
$query = "SELECT * FROM requirement";
$data = mysqli_query($conn,$query);
$total_rows = mysqli_num_rows($data);

if($total_rows != 0)
{
	?>
	
	<table>
		<tr>
			<td><b>Customer ID</b></td>
			<td><b>kgs</b></td>
			<td><b>Flavours</b></td>
			<td><b>Shapes</b></td>
			<td><b>Customized requests</b></td>
		</tr>
		
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result[customer_id]."</td>
				<td>".$result[kgs]."</td>
				<td>".$result[flavours]."</td>
				<td>".$result[shapes]."</td>
				<td>".$result[customizedreq]."</td>
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
</ul10>
   </header>
</body>
</html>

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
	<li class="active" ><a href="package.php">package</a></li>
	</div>
	</ul4>
	
	<ul5>
	<div class="main2">
	<font size="5">
	<li><a href="insertPack.php">Insert </a></li>
	</div>
	</ul5>
	
	<ul11>
	<div class="main3">
	 <font size="5">
	<li><a href="Index.php"> Log Out </a></li>
	</div>
	</ul11>
	
    <div class="title1">
    <font size="6">
      

<?php

include("connection.php");
error_reporting(0);
$query = "SELECT * FROM package";
$data = mysqli_query($conn,$query);
$total_rows = mysqli_num_rows($data);

if($total_rows != 0)
{
	?>
	
	<table>
		<tr>
			<td><b>Package ID</b></td>
			<td><b>Package type</b></td>
			<td><b>Package size</b></td>
			<td><b>Cost</b></td>
		</tr>
		
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result[p_id]."</td>
				<td>".$result[packagetype]."</td>
				<td>".$result[size]."</td>
				<td>".$result[cost]."</td>
				<td><a href='modifyPack.php?pid=$result[p_id]&ptype=$result[packagetype]&sz=$result[size]&pri=$result[cost]'>Edit</a></td>
				<td><a href='deletePack.php?pid=$result[p_id]&ptype=$result[packagetype]&sz=$result[size]&pri=$result[cost]'>Delete</a></td>
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

<html>
<head>
  <title>THE CAKESHOP</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
  <header>
  <ul1>
    <div class="main">
    <font size="5.5">
    <li > <a href="product.php"> PRODUCTS </a></li>
    <li class="active"><a href="customer.php"> CUSTOMERS </a></li>
    <li><a href="suppliers.php"> SUPPLIERS </a></li>
    <li><a href="staff.php"> STAFF </a></li>
	<li><a href="sales.php"> SALES </a></li>
	<li><a href="about.php"> ABOUT US </a></li>
	</font>
    </div>
    </ul1>
    <ul4>
	<div class="main1">
	<font size="5.5">
	<li><a href="request.php">BILL</a></li>
	<li><a href="requirement.php">REQUIREMENT</a></li>
	</div>
	</ul4>
	<ul5>
	<div class="main2">
	<font size="5">
	<li><a href="insertCust.php">Insert </a></li>
	</div>
	</ul5>
    
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
$query = "SELECT * FROM customer ";
$query1 = "SELECT * FROM requirement ";
$data = mysqli_query($conn,$query);
$data1 = mysqli_query($conn,$query1);
$total_rows = mysqli_num_rows($data);
$total_rows1 = mysqli_num_rows($data1);

if($total_rows != 0 && $total_rows1 != 0)
{
	?>
	
	<table>
		<tr>
			<td><b>Customer ID</b></td>
			<td><b>Name</b></td>
			<td><b>Address</b></td>
			<td><b>Contact</b></td>
			<td><b>Cost</b></td>
			<td><b>Order Date</b></td>
			<td><b>Purchase Date</b></td>
		</tr>
		
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
			 $result1 = mysqli_fetch_assoc($data1);
			 
		echo "<tr>
				<td>".$result[customer_id]."</td>
				<td>".$result[cname]."</td>
					<td>".$result[c_address]."</td>
						<td>".$result[contact]."</td>
							<td>".$result[cost]."</td>
								<td>".$result[orderdate]."</td>
									<td>".$result[purchasedate]."</td>
				<td><a href='modifyCust.php?cid=$result[customer_id]&c_name=$result[cname]&add=$result[c_address]&Contact=$result[contact]&pri=$result[cost]&order=$result[orderdate]&purchase=$result[purchasedate]&wt=$result1[kgs]&flavour=$result1[flavours]&shape=$result1[shapes]&req=$result1[customizedreq]''>Edit</a></td>
				<td><a href='deleteCust.php?cid=$result[customer_id]&c_name=$result[cname]&add=$result[c_address]&Contact=$result[contact]&pri=$result[cost]&order=$result[orderdate]&purchase=$result[purchasedate]&wt=$result1[kgs]&flavour=$result1[flavours]&shape=$result1[shapes]&req=$result1[customizedreq]''>Delete</a></td>
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
		
		
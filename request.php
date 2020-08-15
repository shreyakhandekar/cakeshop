 <?php

 $conn = mysqli_connect('localhost','root','','cakeshop')
 or die('Error connecting to MySQL server.');
 error_reporting(0);
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
	<li class="active" ><a href="request.php">BILL</a></li>
	<li><a href="requirement.php">REQUIREMENT</a></li>
	</div>
	</ul4>
	
	<ul5>
	<div class="main2">
	<font size="5">
	<li><a href="insertRequest.php">Insert </a></li>
	</div>
	</ul5>
	
	<ul11>
	<div class="main3">
	 <font size="5">
	<li><a href="Index.php"> Log Out </a></li>
	</div>
	</ul11>
	
   <ul10>	
    <div class="title4">
    <font size="6">
      
	<?php

	$query = "SELECT * FROM request";
	$data = mysqli_query($conn,$query);
	$total_rows = mysqli_num_rows($data);

	if($total_rows != 0)
	{
		?>
		
		<table>
			<tr>
				<td><b>Purchase ID</b></td>
				<td><b>Order Date</b></td>
				<td><b>Delivery Time</b></td>
				<td><b>Price</b></td>
										
			</tr>
			
		<?php
		while($result = mysqli_fetch_assoc($data))
		{
			echo "<tr>
					<td>".$result["purchase_id"]."</td>
					<td>".$result["orderdate"]."</td>
					<td>".$result["deliverytime"]."</td>
					<td>".$result["totalprice"]."</td>
					<td><a href='modifyRequest.php?p_id=$result[purchase_id]&orderd=$result[orderdate]&delivery=$result[deliverytime]&pri=$result[totalprice]'>Edit</a></td>
					<td><a href='deleteRequest.php?p_id=$result[purchase_id]&orderd=$result[orderdate]&delivery=$result[deliverytime]&pri=$result[totalprice]'>Delete</a></td>
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
		
		

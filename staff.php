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
  <ul3>
    <div class="main">
    <font size="5.5">
    <li> <a href="product.php"> PRODUCTS </a></li>
    <li><a href="customer.php">CUSTOMERS </a></li>
    <li><a href="suppliers.php"> SUPPLIERS </a></li>
    <li class="active"><a href="staff.php"> STAFF </a></li>
	<li><a href="sales.php"> SALES </a></li>
	<li><a href="about.php"> ABOUT US </a></li>
    </div>
	</ul3>
	
	<ul5>
	<div class="main2">
	<font size="5">
	<li><a href="insertStaff.php">Insert </a></li>
	
	</div>
	</ul5>
	
	<ul11>
	<div class="main3">
	 <font size="5">
	<li><a href="Index.php"> Log Out </a></li>
	</div>
	</ul11>
    
	<ul10>
    <div class="title3">
    <font size="6">
	
<?php

include("connection.php");
error_reporting(0);
$query = "SELECT * FROM staff";
$data = mysqli_query($conn,$query);
$total_rows = mysqli_num_rows($data);

if($total_rows != 0)
{
	?>
	
	<table>
		<tr>
			<td><b>Staff ID</b></td>
			<td><b>Name</b></td>
			<td><b>Designation</b></td>
			<td><b>Salary</b></td>
			<td><b>Join date</b></td>
			<td><b>Contact</b></td>
			<td><b>Working Hrs</b></td>
		</tr>
		
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result[staff_id]."</td>
				<td>".$result[staff_name]."</td>
				<td>".$result[designation]."</td>
				<td>".$result[salary]."</td>
				<td>".$result[joindate]."</td>
				<td>".$result[contact]."</td>
				<td>".$result[workinghours]."</td>
				<td><a href='modifyStaff.php?sid=$result[staff_id]&sname=$result[staff_name]&des=$result[designation]&sal=$result[salary]&doj=$result[joindate]&num=$result[contact]&hrs=$result[workinghours]'>Edit</a></td>
				<td><a href='deleteStaff.php?sid=$result[staff_id]&sname=$result[staff_name]&des=$result[designation]&sal=$result[salary]&doj=$result[joindate]&num=$result[contact]&hrs=$result[workinghours]'>Delete</a></td>
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

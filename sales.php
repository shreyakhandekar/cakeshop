<?php
//Step1
 $conn = mysqli_connect('localhost','root','','cakeshop')
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
    <li><a href="suppliers.php"> SUPPLIERS </a></li>
    <li><a href="staff.php"> STAFF </a></li>
	<li class="active"><a href="sales.php"> SALES </a></li>
	<li><a href="about.php"> ABOUT US </a></li>
    </div>
    </ul2>
    
	<ul11>

	<div class="main3">
	 <font size="5">
	<li><a href="Index.php"> Log Out </a></li>
	
	</div>
	</ul11>
	
    <div class="title1">
    <font size="6">
      

<?php

$query = "SELECT sum(cost) AS 'sumCust' FROM customer";
$res =mysqli_query($conn, $query);
$data=mysqli_fetch_array($res);

echo "Income from Customer : ".$data['sumCust'];
$sCust=$data['sumCust'];

$query = "SELECT sum(totalprice) AS 'sumReq' FROM request";
$res =mysqli_query($conn, $query);
$data=mysqli_fetch_array($res);

echo "<br>Income from customer's request : ".$data['sumReq'];
$sReq=$data['sumReq'];

$query = "SELECT sum(cost) AS 'sumPack' FROM package";
$res =mysqli_query($conn, $query);
$data=mysqli_fetch_array($res);

echo "<br>Package Costing : ".$data['sumPack'];
$sPack=$data['sumPack'];

$query = "SELECT sum(salary) AS 'salaryStaff' FROM staff";
$res =mysqli_query($conn, $query);
$data=mysqli_fetch_array($res);

echo "<br>Staffs' Salary : ".$data['salaryStaff'];
$sStaff=$data['salaryStaff'];


$query = "SELECT sum(cost) AS 'sumSupp' FROM suppliers";
$res =mysqli_query($conn, $query);
$data=mysqli_fetch_array($res);

echo "<br>Suppliers' Payment : ".$data['sumSupp'];
$sSupp=$data['sumSupp'];

 $x=($sCust+$sReq)-($sPack+$sStaff+$sSupp);
 echo "<b><br>Profit in this Week : <b>",$x;
 
mysqli_close($conn);
?>

    </div>   
  
 </header>
 <footer>
			<p>© 2019 Cakeshop All Rights Reserved.</p>
			<p style="font-size: 12px">Made By :</p>
			<p style="font-size: 12px">a)Shreya Khandekar b)Shraddha Korade c)Rutuja Kulkarni d)Tejashree Pathak </p>
		</footer>

</body>
</html>

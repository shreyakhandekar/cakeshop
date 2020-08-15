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
	<li><a href="sales.php"> SALES </a></li>
	<li class="active"><a href="about.php"> ABOUT US </a></li>
    </div>
    </ul2>
    
	<ul11>

	<div class="main3">
	 <font size="5">
	<li><a href="Index.php"> Log Out </a></li>
	
	</div>
	</ul11>
	
		<ul12>
		<div class="foot">
		<font size="7">
			<p><b><center>© 2019 CAKESHOP. All Rights Reserved.</center></b></p>	
			<p style="font-size: 35px">Made By :</p>
			<p style="font-size: 35px">1.Shreya Khandekar<br>
			2.Shraddha Korade<br>
			3.Rutuja Kulkarni<br>
			4.Tejashree Pathak<br></p>
			</font>	
		</div>
		</ul12>

</header>
</body>
</html>

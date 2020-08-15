
<?php
//Step1
 $conn = mysqli_connect('localhost','root','','cakeshop')
 or die('Error connecting to MySQL server.');
?>
<?php
if(isset($_POST["submit2"]))
{
	header('Location:logout.php');
}
?>	

<html>
<head>
  <title>THE CAKESHOP</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
  <header>
  <ul>
    <div class="main">
    <font size="5.5">
    <li class="active"> <a href="product.php"> PRODUCTS </a></li>
    <li><a href="customer.php">CUSTOMERS </a></li>
    <li><a href="suppliers.php"> SUPPLIERS </a></li>
    <li><a href="staff.php"> STAFF </a></li>
	<li><a href="sales.php"> SALES </a></li>
	<li><a href="about.php"> ABOUT US </a></li>
    </div>
   </ul> 
   <ul5>
	<div class="main2">
	<font size="5">
	<li><a href="insertProd.php"> Insert </a></li>
	</div>
	</ul5>
	<ul11>
	<div class="main3">
	
  <font size="5">
	<li><a href="Index.php"> Log Out </a></li>
  </div>
  </ul11>
	  
<ul10>
	<div class="title">

		<font size="6">

	<?php
	
	$query = "SELECT * FROM product";
	$data = mysqli_query($conn,$query);
	$total_rows = mysqli_num_rows($data);

	if($total_rows != 0)
	{
		?>
		
		<table>
			<tr>
				<td><b>Product ID</b></td>
				<td><b>Product name</b></td>
				<td><b>Supplier Name</b></td>
				<td><b>Quantity</b></td>
				<td><b>Price</b></td>
				<td><b>mfg_date</b></td>
				<td><b>exp_date</b></td>
				<td><b>Type</b></td>
						
			</tr>
			
		<?php
		$currentdate = date("y-m-d");
		while($result = mysqli_fetch_assoc($data))
		{
			if($result["exp_date"] < $currentdate)
			{
			
			echo "<tr style=\"color:#F00\">
					<td>".$result["product_id"]."</td>
					<td>".$result["pname"]."</td>
					<td>".$result["sname"]."</td>
					<td>".$result["quantity"]."</td>
					<td>".$result["price"]."</td>
					<td>".$result["mfg_date"]."</td>
					<td>".$result["exp_date"]."</td>
					<td>".$result["type" ]."</td>
					<td><a href='modifyProd.php?pid=$result[product_id]&p_name=$result[pname]&comp=$result[sname]&quan=$result[quantity]&pri=$result[price]&mfg=$result[mfg_date]&exp=$result[exp_date]&typ=$result[type]'>Edit</a></td>
					<td><a href='deleteProd.php?pid=$result[product_id]&p_name=$result[pname]&comp=$result[sname]&quan=$result[quantity]&pri=$result[price]&mfg=$result[mfg_date]&exp=$result[exp_date]&typ=$result[type]'>Delete</a></td>
				
			
                </tr>
				</span>";
			}
			else
			{
				echo "<tr>
			
					<td>".$result["product_id"]."</td>
					<td>".$result["pname"]."</td>
					<td>".$result["sname"]."</td>
					<td>".$result["quantity"]."</td>
					<td>".$result["price"]."</td>
					<td>".$result["mfg_date"]."</td>
					<td>".$result["exp_date"]."</td>
					<td>".$result["type" ]."</td>
					<td><a href='modifyProd.php?pid=$result[product_id]&p_name=$result[pname]&comp=$result[sname]&quan=$result[quantity]&pri=$result[price]&mfg=$result[mfg_date]&exp=$result[exp_date]&typ=$result[type]'>Edit</a></td>
					<td><a href='deleteProd.php?pid=$result[product_id]&p_name=$result[pname]&comp=$result[sname]&quan=$result[quantity]&pri=$result[price]&mfg=$result[mfg_date]&exp=$result[exp_date]&typ=$result[type]'>Delete</a></td>
				
                </tr>";
			}
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
		
		

<?php
$servername="localhost";
$username="root";
$password="";
$database="login";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn)
{
	echo "";
}
else
{
	die("Connection failed" .mysql_connect_error());
}
error_reporting(0);
?>

<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
  <header>
  <ul>
    <div class="main">
    <font size="4">
    </div>
    <div class="title">
    <font size="7">
    <h1>monGinis</h1> 
    </div>   
  <div class="signup">
  <img src="Img2.png" class="avatar">
 
  <h2>Sign Up</h2>
  <form>
  <font size=6>
  <p>User Name:</p>
  <input type="text" name="uName" placeholder="Enter Username"> 
  <p>Password: <font size=3><span style="color:blue;">*Must be greater than 4 letters</span></font></p>
  <input type="password" name="Pass" placeholder="Enter Password"> 
   <p>Confirm Password:</p>
  <input type="password" name="cPass" placeholder="Enter Password">
<ul3>  
 <div class="clearfix">
 <input type="Submit" name="cancel" value="Cancel"/>
  <input type="Submit" name="submit" value="Register"/>
 <?php
if($_GET['submit'])
{
	$user=$_GET['uName'];
	$passw=$_GET['Pass'];
	$cpass=$_GET['cPass'];
	
	if($user!="" && strlen($passw)>="4" && $cpass!="")
	{
		if($passw==$cpass)
		{
			$query = "INSERT INTO user values('$user','$passw')";
			$data = mysqli_query($conn ,$query);
			
			if($data)
			{
				echo "<center><b>Registration successful!!  <a href = 'Index.php'>Back</a></b></center>";
			}
			else
			{
				echo '<br><span style="color:red;text-align:center;">Username already exists.</span>';
			}
		}
		else
		{
			echo '<center><span style="color:red;text-align:center;"><b>Enter passwords correctly</b></span></center>';
		}
			
		
	}
	
	else
	{
		echo '<br><span style="color:red;text-align:center;">All fields required</span>';
	}	
}

if($_GET['cancel'])
{
	header("Location:Index.php");
}
	
?>
</header>
</div>
</ul3>
 </div>
 </ul>
</body>
</html>
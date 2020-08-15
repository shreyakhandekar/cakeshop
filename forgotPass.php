<?php
include("connection2.php");
error_reporting(0);
?>

<html>
<head>
<style type="text/css">
body{
	background-image:url('<?php echo $profpicture;?>');
	background-repeat: no-repeat;
	background-position:center;
	background-size:cover;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<center>
<table bgcolor="#fff">
<h1><b><span style="color:blue;text-align:center;">Forgot password?</span></b></h1>
<br>
<h1><b>Enter correct username to get password.</b></h1>
<form action="" method="GET">
<tr><td>                   </tr></td>
<tr><td><b>Enter username : <br></b></td><td><input type="text"  name="uName"  value=""/></td></tr><br><br><br>
<tr><td>                    </tr></td>
</table>
<br><br>
<tr><td><input type="submit" name="submit" value="Submit"/></tr></td>
</form>

<?php

$check = $_GET['uName'];

if($_GET['submit'])
{
		if($check!="")
	{
		$query = "SELECT pass FROM user where usern='$check'";
		$data = mysqli_query($conn ,$query);
		
		if($data)
		{
			if($password = mysqli_fetch_assoc($data))
			{
				echo "<b><h2>Password is $password[pass]</h2></b><br><br>";
			}
			else
			{
				echo "<br><h2>Enter valid username</h2>";
			}
		}
		
	}
	
	else
	{
		echo "All fields required";
	}	
}
?>
<br><br>
<b><h2><a href=Index.php>Go back to login page</a></h2></b>
</center>
</html>
</body>
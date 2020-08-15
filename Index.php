<?php
include("connection2.php");
error_reporting(0);
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","login");
	$result = mysqli_query($conn,"SELECT * FROM user WHERE usern ='" . $_POST["username"] . "' and pass = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Login Details!";
	} else {
		header("Location:product.php");
	}
}
?>	 
	
<html>
<head>
  <title>Cake Shop</title>
  <link rel="stylesheet" type="text/css" href="style.css">
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
  
  <div class="loginbox">
  <img src="Img2.png" class="avatar">
 
  <font size=7>
  <h1>Login</h1>
    
  <form name="form" action="" method="post">
  
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    
    <tr>
      <td colspan="2" align="center" valign="top">
	   </tr>
  
  <font size=6>
  <p><label for="uname">User Name:</label></p>
  <input type="text" id="username" name="username" placeholder="Enter Username"> 
  <br>
  <p><label for="pass1">Password:</label></p>
  <input type="password" id="password" name="password" placeholder="Enter Password"> 
  <font size=5>
   <span style="color:red" ><?php if($message!="") { echo $message; } ?></span>
   </font>
   <br>
  <p>
  
  <input id="button" type="submit" name="submit1" value="Login">
	</p>	
	
  </div>
  </ul>
  <ul3>
  <div class="forgot">
  <font size="5">
  <li><a href="forgotpass.php">ForgotPassword?</a></li>
  </div>
  </ul3>
  <ul2>
  <div class="sign">
  <li><a href ="signup.php">CreateAccount</a></li>
  </div>
  </ul2>
 </header>
</body>
</html>
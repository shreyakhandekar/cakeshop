<?php

 $conn = mysqli_connect('localhost','root','','cakeshop')
 or die('Error connecting to MySQL server.');
 error_reporting(0);
?>

<html>
<head>
<title>
<link rel="" type="text/php" href="product.php">
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body background="Img1.jpg">

<h2>Login</h2>

<form action="/action_page.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="" class="">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
        
    <button type="submit">Submit</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw"> <a href="#">Forgot password?</a></span>
  </div>
</form>

</body>
</html>


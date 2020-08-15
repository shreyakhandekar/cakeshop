<?php

$servername="localhost";
$username="root";
$password="";
$database="login";
$profpicture="Img1.jpg";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn)
{
	echo "";
}
else
{
	die("Connection failed" .mysql_connect_error());
}

?>
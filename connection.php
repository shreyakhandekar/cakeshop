<?php

$servername="localhost";
$username="root";
$password="";
$database="cakeshop";
$profpic="cake2.jpg";

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
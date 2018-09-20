<?php 

include_once("constants.php");

$conn = new mysqli("localhost","root","","bhojaniparivar");

if ($conn->connect_error) {
	die("DATABASE_NOT_CONNECTED");
}else{
	// echo "Connected";
}

 ?>
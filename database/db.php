<?php 

include_once("constants.php");

// $conn = new mysqli("localhost","bhojanip_admin","L%C4;_[P;lg[","bhojanip_subscribe_list");
$conn = new mysqli("localhost","root","","bhojanip_subscribe_list");

if ($conn->connect_error) {
	die("DATABASE_NOT_CONNECTED");
}else{
// 	echo "Connected";
}

 ?>
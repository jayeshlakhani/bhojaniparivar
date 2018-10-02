<?php 


// $conn = new mysqli("sql203.epizy.com","epiz_22770116","VxKDav1PO1f3Ve","epiz_22770116_subscriber_list");
// $conn = new mysqli("localhost","pokarpar_admin","@zD8agtDNz99","pokarpar_subscribe");
$conn = new mysqli("localhost","root","","epiz_22770116_subscriber_list");

if ($conn->connect_error) {
	die("DATABASE_NOT_CONNECTED");
}else{
// 	echo "Connected";
}

 ?>
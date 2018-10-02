<?php 



include_once("../database/db.php");

// $conn = new mysqli("sql203.epizy.com","epiz_22770116","VxKDav1PO1f3Ve","epiz_22770116_subscriber_list");
// $conn = new mysqli("localhost","pokarpar_admin","@zD8agtDNz99","pokarpar_subscribe");
$conn = new mysqli("localhost","root","","epiz_22770116_subscriber_list");
	
$email = $_POST['email'];

$subscribe_email_check = $conn->query("SELECT * FROM mail_list WHERE email = '".$email."'");
	if( $subscribe_email_check->num_rows > 0) {
       echo 'Email id already exists';
    }else {
		$conn->query("INSERT INTO `mail_list`(`email`) VALUES ('$email')");
	    echo "Success";
	}
die();
?>
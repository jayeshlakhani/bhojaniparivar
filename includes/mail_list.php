<?php 



include_once("../database/db.php");

// $conn = new mysqli("localhost","bhojanip_admin","L%C4;_[P;lg[","bhojanip_subscribe_list");
$conn = new mysqli("localhost","root","","bhojanip_subscribe_list");
	
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
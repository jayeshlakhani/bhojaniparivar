<?php 



include_once("../database/db.php");

$email = $_POST['email'];

function emailExists($email){
	$conn = new mysqli("localhost","root","","bhojaniparivar");
	$result = $conn->query("SELECT email FROM `mail_list` WHERE email = '".$email."'");
	if ($result->num_rows > 1) {
		return 0;
	}else{
		return 1;
	}
}

function addNewEmail($email){
	if (emailExists($email) == 1) {
		$conn = new mysqli("localhost","root","","bhojaniparivar");
		if($conn->query("INSERT INTO `mail_list`(`email`) VALUES ('$email')")){
			// echo $conn->insert_id;
			echo "Success";
			// header('Location: http://localhost/proj01/index.php');
		}else{
			die($conn->error);
		}
	}else{
		die("EMAIL_ALREADY_EXISTS");
	}
	
}

addNewEmail($email);

 ?>
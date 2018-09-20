<?php 

include_once("process.php");

function addNewEmail($email){
	$conn = new mysqli("localhost","root","","bhojaniparivar");
	if($conn->query("INSERT INTO `mail_list`(`email`) VALUES ('$email')")){
		echo $conn->insert_id;
		// header('Location: http://localhost/proj01/index.php');
	}else{
		die($conn->error);
	}
}

addNewEmail($email);

 ?>
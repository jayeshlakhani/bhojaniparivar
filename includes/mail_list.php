<?php 


include_once("../database/db.php");

$email = $_POST['email'];


function addNewEmail($email){
	$conn = new mysqli("localhost","root","","bhojaniparivar");
	if($conn->query("INSERT INTO `mail_list`(`email`) VALUES ('$email')")){
		// echo $conn->insert_id;
		echo "Success";
		// header('Location: http://localhost/proj01/index.php');
	}else{
		die($conn->error);
	}
}

addNewEmail($email);

 ?>
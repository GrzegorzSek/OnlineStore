<?php
    include '../config.php';
    
	$name=$_POST['name'];
	$surname=$_POST['surname'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $phonenumber=$_POST['phonenumber'];
    $address=$_POST['address'];
    $address2=$_POST['address2'];
    $city=$_POST['city'];
    $zipCode=$_POST['zipCode'];
    $voivodeship=$_POST['voivodeship'];

    $SESSION = $_SESSION['userid'];

	$sql = "UPDATE user SET `name`='$name', `surname`='$surname', `email`='$email', `password`='$password', `phonenumber`='$phonenumber', `address`='$address', `address2`='$address2', `city`='$city', `zipCode`='$zipCode', `voivodeship`='$voivodeship' WHERE `id`='$SESSION'";

	if (mysqli_query($link, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($link);

<?php
    include '../config.php';
    
    $orderID=$_POST['orderID'];
	$shippingMethod=$_POST['shippingMethod'];
	$phoneNumber=$_POST['phoneNumber'];
    $address=$_POST['address'];
    $address2=$_POST['address2'];
    $city=$_POST['city'];
    $zipCode=$_POST['zipCode'];
    $voivodeship=$_POST['voivodeship'];
    $orderStatus=$_POST['orderStatus'];
    $amountToPay=$_POST['amountToPay'];

	$sql = "UPDATE clientorder SET `order_status`='$orderStatus', `shipping_method`='$shippingMethod', `amounttopay`='$amountToPay', `phonenumber`='$phoneNumber', `address`='$address', `address2`='$address2', `city`='$city', `zipCode`='$zipCode', `voivodeship`='$voivodeship' WHERE `id`='$orderID'";

    if (mysqli_query($link, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($link);

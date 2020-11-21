<?php
    include '../config.php';
    
    $itemId=$_POST['itemId'];

	$sql = "DELETE FROM cartitem WHERE `id`='$itemId'";

	$productQuantityInCart = "SELECT * FROM cartitem WHERE id='$itemId'";
    $result = mysqli_query($link, $productQuantityInCart);
    $fetchQuantity = mysqli_fetch_array($result);
	$productQuantityInCartValue = $fetchQuantity['product_quantity'];
	$productId = $fetchQuantity['product_id'];

	$restoreProductQuantity = "UPDATE product SET quantity=quantity+'$productQuantityInCartValue' WHERE id='$productId'";
	mysqli_query($link, $restoreProductQuantity);

	if (mysqli_query($link, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($link);

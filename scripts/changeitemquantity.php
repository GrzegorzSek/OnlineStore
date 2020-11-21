<?php
    include '../config.php';
    
    $itemId=$_POST['itemId'];
    $newItemQuantity=$_POST['newItemQuantity'];

	//pobranie aktualnej liczby produktów
	$currentQuantity_query = "SELECT * FROM cartitem WHERE id='$itemId'";
	$result = mysqli_query($link, $currentQuantity_query);
    $getQuantity = mysqli_fetch_array($result);
	$currentQuantity = $getQuantity['product_quantity'];
	$productID=$getQuantity['product_id'];
	//koniec
	if($newItemQuantity > $currentQuantity){
		$difference=$newItemQuantity-$currentQuantity;
		$sql = "UPDATE product SET quantity=quantity-$difference WHERE id='$productID'"; //zmniejszenie liczby produktów w tabeli produkt
		mysqli_query($link, $sql);
	}
	if($newItemQuantity < $currentQuantity){
		$difference=$currentQuantity-$newItemQuantity;
		$sql = "UPDATE product SET quantity=quantity+$difference WHERE id='$productID'"; //zwiększenie liczby produktów w tabeli produkt
		mysqli_query($link, $sql);
	}

	$sql = "UPDATE cartitem SET product_quantity='$newItemQuantity' WHERE id='$itemId'";
	


	if (mysqli_query($link, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($link);

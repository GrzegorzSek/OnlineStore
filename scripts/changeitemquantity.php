<?php
    include '../config.php';
    
    $itemId=$_POST['itemId'];
    $newItemQuantity=$_POST['newItemQuantity'];

    $sql = "UPDATE cartitem SET product_quantity='$newItemQuantity' WHERE `id`='$itemId'";

	if (mysqli_query($link, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($link);

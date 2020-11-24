<?php
    include '../config.php';
    
    $productID=$_POST['productID'];

	$sql = "DELETE FROM product WHERE `id`='$productID'";

    mysqli_query($link, $sql);

	if (mysqli_query($link, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($link);

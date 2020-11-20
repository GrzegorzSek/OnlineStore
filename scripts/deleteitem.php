<?php
    include '../config.php';
    
    $itemId=$_POST['itemId'];

    $sql = "DELETE FROM cartitem WHERE `id`='$itemId'";

	if (mysqli_query($link, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($link);

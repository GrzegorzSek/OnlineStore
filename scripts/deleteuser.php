<?php
    include '../config.php';
    
    $id=$_POST['id'];

	$sql = "DELETE FROM cart WHERE `client_id`='$id'";
	mysqli_query($link, $sql);

    $sql = "DELETE FROM user WHERE `id`='$id'";

	if (mysqli_query($link, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($link);

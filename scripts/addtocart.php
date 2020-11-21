<?php
    include "../config.php";

	$productId=$_POST['productId'];

    $SESSION = $_SESSION['userid'];

    $getCartID = "SELECT id FROM cart WHERE client_id='".$SESSION."'";
    $result = mysqli_query($link, $getCartID);
    $fetchCartID = mysqli_fetch_array($result);
    $cartID = $fetchCartID['id'];

    //sprawdzenie produkt juz taki produkt znajduje sie w koszyku
    $sql_query = "SELECT count(*) as cntProduct FROM cartitem WHERE product_id='$productId'";
    $resultCheck = mysqli_query($link, $sql_query);
    $row = mysqli_fetch_array($resultCheck);

    $count = $row['cntProduct'];
    //koniec
    if($count > 0){
        $sql = "UPDATE cartitem SET product_quantity=product_quantity+1 WHERE product_id='$productId'";
        $productQuantityDecrementation = "UPDATE product SET quantity=quantity-1 WHERE id='$productId'";
        mysqli_query($link, $productQuantityDecrementation);
        if (mysqli_query($link, $sql)) {
            echo json_encode(array("statusCode"=>200));
        } 
        else {
            echo json_encode(array("statusCode"=>201));
        }
        mysqli_close($link);
    }else{
        $sql = "INSERT INTO cartitem(cart_id, product_id, product_quantity) VALUES('$cartID', '$productId', '1')";
        $productQuantityDecrementation = "UPDATE product SET quantity=quantity-1 WHERE id='$productId'";
        mysqli_query($link, $productQuantityDecrementation);
        if (mysqli_query($link, $sql)) {
            echo json_encode(array("statusCode"=>200));
        } 
        else {
            echo json_encode(array("statusCode"=>201));
        }
        mysqli_close($link);
    }


    

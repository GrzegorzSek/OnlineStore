<?php
    include "../config.php";

    $email = $_SESSION['email'];
    $SESSION = $_SESSION['userid'];
    $shippingMethod=$_POST['shippingMethod'];
    $check=1;
    $phonenumber=$_POST['phonenumber'];
    $address=$_POST['address'];
    $address2=$_POST['address2'];
    $city=$_POST['city'];
    $zipCode=$_POST['zipCode'];
    $voivodeship=$_POST['voivodeship'];

    //tworzenie zamówienia
    $createNewOrder_query = "INSERT INTO clientorder(`client_id`, `order_status`, `shipping_method`, `phonenumber`, `address`, `address2`, `city`, `zipCode`, `voivodeship`) VALUES('$SESSION', 'oczekujące', '$shippingMethod', '$phonenumber', '$address', '$address2', '$city', '$zipCode', '$voivodeship')";
    mysqli_query($link, $createNewOrder_query);

    //KONIEC tworzenia zamówienia
    //pobranie id złożonego zamówienia
    $getOrderID_query = "SELECT MAX(id) as order_id FROM clientorder WHERE client_id='$SESSION'";
    $resultOrderID = mysqli_query($link, $getOrderID_query);
    $rowOrderID = mysqli_fetch_array($resultOrderID);
    $orderID = $rowOrderID['order_id'];
    //koniec pobranie id złożonego zamówienia

    //dodanie zawartości zamówienia
    $selectItems_query = "SELECT cartitem.cart_id, cartitem.product_id, cartitem.product_quantity, product.price 
                        FROM cartitem INNER JOIN cart ON cartitem.cart_id=cart.id 
                        INNER JOIN product ON cartitem.product_id=product.id
                        WHERE cart.client_id='$SESSION'";
    $rows = mysqli_query($link, $selectItems_query);
    if (!$rows) {
        printf("Error: %s\n", mysqli_error($link));
        exit();
    }
    $results=array();
    while ($result =  mysqli_fetch_array($rows)){
        $results[]=$result;
    }

    $getCartID_query = "SELECT id FROM cart WHERE client_id='$SESSION'";
    $getCartID_result = mysqli_query($link, $getCartID_query);
    $getCartID_row = mysqli_fetch_array($getCartID_result);
    $cartID = $getCartID_row['id'];

    $rowsNumbersql = "SELECT count(*) as cntRows FROM cartitem WHERE cart_id='$cartID'";
    $resultNumber = mysqli_query($link, $rowsNumbersql);
    $row2 = mysqli_fetch_array($resultNumber);
    $total_row = $row2['cntRows'];

    $amountToPay=0;
    $sum=0;
    $insertOrderContent_query = array();
    if($total_row > 0){
		foreach($results as $result){
            $amountToPay = $result['product_quantity']*$result['price'];
            $insertOrderContent_query[] = "('".$orderID."', '".$result['product_id']."', '".$result['product_quantity']."', '".$amountToPay."')";
            $sum = $sum + $amountToPay;
        }
    }
    mysqli_query($link, 'INSERT INTO ordercontent(order_id, product_id, quantity, amounttopay) VALUES '.implode(',', $insertOrderContent_query));
    //KONIEC dodawania zawartości

    //Czyszczenie koszyka
    $cleanCart_query = "DELETE FROM cartitem WHERE cart_id='$cartID'";
    mysqli_query($link, $cleanCart_query);
    //KONIEC czyszczenia koszyka

    //wpisanie kwoty zamówienia do BD
    if($shippingMethod = "Poczta"){
        $sum = $sum + 10;
    }
    if($shippingMethod = "Kurier"){
        $sum = $sum + 15;
    }
    $addAmountToPay_query = "UPDATE clientorder SET amounttopay='$sum' WHERE id='$orderID'";
    mysqli_query($link, $addAmountToPay_query);
    //KONIEC

    //Wysyłanie maila z danymi do dokonania płatności
    $subject="Twoje zamowienie ze strony OnlineStore";
    $message = "Tytul przelewu: ".$orderID."\r\nKwota: ".number_format($sum, 2)."zl\r\nNa rachunek: 82 1020 5226 0000 6102 0417 7895";
    $mailHeaders = "Zamowienie: ";
    mail($email, $subject, $message, $mailHeaders);
    //KONIEC przelewu    


    if ($check=1) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($link);


    

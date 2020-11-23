<?php
    include '../config.php';
    
    $itemID=$_POST['itemID']; //aka product_id
    $orderID=$_POST['orderID'];

    //dodanie liczby sztuk do produktu w tabeli product
    $sql = "SELECT * FROM ordercontent WHERE `product_id`='$itemID' AND `order_id`='$orderID'";
    $result = mysqli_query($link, $sql);
    $fetchedData = mysqli_fetch_array($result); //pobranie liczby sztuk
    $quantity = $fetchedData['quantity'];

    $restoreProductQuantity = "UPDATE product SET quantity=quantity+'$quantity' WHERE id='$itemID'";
    mysqli_query($link, $restoreProductQuantity);
    //KONIEC

    //zmniejszenie kwoty zamówienia w tabeli clientorder
    $amountToPay = $fetchedData['amounttopay'];

    $changeAmountToPay = "UPDATE clientorder SET amounttopay=amounttopay-'".$amountToPay."' WHERE id='$orderID'";
    mysqli_query($link, $changeAmountToPay);
    //KONIEC

    //usuwanie przedmiotu z tableli ordercontent
    $deleteOrderItem = "DELETE FROM ordercontent WHERE `product_id`='$itemID' AND `order_id`='$orderID'";
    mysqli_query($link, $deleteOrderItem);
    //KONIEC

    //Jeśli nic nie zostało w zamówieniu to zamówienie zostaje usunięte
    $sql_query = "SELECT count(*) as cntItems FROM ordercontent WHERE `order_id`='$orderID'";
    $resultCheck = mysqli_query($link, $sql_query);
    $row = mysqli_fetch_array($resultCheck);

    $count = $row['cntItems'];

    if($count == 0){
        $sql = "DELETE FROM clientorder WHERE id='$orderID'";
        mysqli_query($link, $sql);
    }
    //KONIEC


	mysqli_close($link);

<?php
    include "../config.php";

	if($_POST['orderID']){
        $orderID=$_POST['orderID'];
        $SESSION = $_SESSION['userid'];

        $sql = "SELECT product.name, product.brand, product.size, product.price, product.image,
        ordercontent.product_id, ordercontent.quantity, ordercontent.amounttopay, clientorder.id
        FROM product INNER JOIN ordercontent ON product.id=ordercontent.product_id 
        INNER JOIN clientorder ON clientorder.id=ordercontent.order_id
        WHERE ordercontent.order_id='$orderID'";
        $result = mysqli_query($link, $sql);

        if (!$result) {
            printf("Error: %s\n", mysqli_error($link));
            exit();
        }

        //liczba wierszy

        $output = '';
        $iter = 1;
        if (mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){ 
                $output .= '
                    <tr id="'.$row['id'].'">
                        <th scope="row" class="align-middle">'.$iter.'</th>
                        <td data-target="productName" class="align-middle">'.$row['name'].'</td>
                        <td data-target="brand" class="align-middle">'.$row['brand'].'</td>
                        <td data-target="amountToPay" class="align-middle">'.$row['amounttopay'].' zł</td>
                        <td data-target="quantity" class="align-middle">'.$row['quantity'].'</td>
                        <td data-target="image" class="align-middle"><img src="'.$row['image'].'" style="width:60px; height:80px;"></td>                     
                    </tr>
                ';
                $iter=$iter+1;
            }
        }
        else{
            $output = '<td colspan="8">Brak danych</td>';
        }
    }
    echo $output;

?>
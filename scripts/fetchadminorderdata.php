<?php
    include "../config.php";

	if($_POST['orderID']){
        $orderID=$_POST['orderID'];

        $sql = "SELECT * FROM clientorder WHERE id='$orderID'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        //var_dump(mysqli_error($link));

        if (!$result) {
            printf("Error: %s\n", mysqli_error($link));
            exit();
        }

        if (mysqli_num_rows($result) > 0){
            $output = '
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="shippingMethod">Sposó wysyłki</label>
                        <input type="text" class="form-control" id="orderShippingMethod" value="'.$row['shipping_method'].'" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="amountToPay">Kwota</label>
                        <input type="text" class="form-control" id="orderAmountToPay" value="'.$row['amounttopay'].'" pattern="[1-9]\d*|[1-9]\d*\.\d{2}" title="wprowadź dane w odpowiednim formacie np. 11 lub 11.00" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phoneNumber">Numer telefonu</label>
                        <input type="tel" class="form-control" id="orderPhoneNumber" value="'.$row['phonenumber'].'" maxlength="9" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="address">Adres</label>
                        <input type="text" class="form-control" id="orderAddress" value="'.$row['address'].'" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address2">Adres 2</label>
                        <input type="text" class="form-control" id="orderAddress2" value="'.$row['address2'].'">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="city">Miasto</label>
                        <input type="text" class="form-control" id="orderCity" value="'.$row['city'].'" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="zipCode">kod pocztowy</label>
                        <input type="text" class="form-control" id="orderZipCode" value="'.$row['zipCode'].'" pattern="[0-9]{2}[-]{1}[0-9]{3}" title="Wprowadź kod pocztowy w formacie 00-000" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="voivodeship">Województwo</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="orderVoivodeship" value="'.$row['voivodeship'].'" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="voivodeship">Status zamówienia</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="orderStatus" value="'.$row['order_status'].'" required>
                        </div>
                    </div>
                </div>
            ';
            
        }
        else{
            $output = '<td colspan="8">Brak danych</td>';
        }
    }
    echo $output;

?>
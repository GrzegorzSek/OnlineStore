<?php
    include "../config.php";

	if($_POST['productID']){
        $productID=$_POST['productID'];

        $sql = "SELECT * FROM product WHERE id='$productID'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        //var_dump(mysqli_error($link));

        if (!$result) {
            printf("Error: %s\n", mysqli_error($link));
            exit();
        }

        if (mysqli_num_rows($result) > 0){
            $output = '
                <div class="form-group">
                    <label for="name">Nazwa</label>
                    <input type="text" class="form-control" name="productName" id="productName" value="'.$row['name'].'" required>
                </div>
                <div class="form-group">
                    <label for="brand">Marka</label>
                    <input type="text" class="form-control" name="productBrand" id="productBrand" value="'.$row['brand'].'" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="productSize">Rozmiar</label>
                        <input type="text" class="form-control" name="productSize" id="productSize" value="'.$row['size'].'" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="productColour">Kolor</label>
                        <input type="text" class="form-control" name="productColour" id="productColour" value="'.$row['colour'].'" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="productPrice">Cena</label>
                        <input type="text" class="form-control" name="productPrice" id="productPrice" value="'.$row['price'].'" pattern="[1-9]\d*|[1-9]\d*\.\d{2}" title="wprowadź dane w odpowiednim formacie np. 11 lub 11.00" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="quantity">Liczba sztuk</label>
                        <input type="number" class="form-control" name="productQuantity" id="productQuantity" value="'.$row['quantity'].'" min="1" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="productDescription">Opis</label>
                    <textarea rows="4" cols="5" class="form-control" name="productDescription" id="productDescription" value="'.$row['description'].'" required></textarea>
                </div>
                <div class="form-group">
                    <label for="productImage">Wybierz zdjęcie:</label><br>
                    <input type="file" name="image" id="image">
                    <input type="hidden" id="productID" name="productID" value="'.$row['id'].'">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success float-right" id="updateProductButton">Zaktualizuj</button>
                    <button type="button" class="btn btn-secondary float-right mr-1" data-dismiss="modal">Zamknij</button>
                </div>
            ';
            
        }
        else{
            $output = '<td colspan="8">Brak danych</td>';
        }
    }
    echo $output;

?>
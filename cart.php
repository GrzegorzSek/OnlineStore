<?php
	include("config.php");

	$SESSION = $_SESSION['userid'];
?>
<!doctype html>
<html lang="pl">
	<head>
		<?php include 'head.php';?>
        <script>
        //AKTUALIZUJE DANE
            $(document).ready(function(){
                $(document).on('click','button[data-role=update]', function(){
                    itemId = $(this).data('id'); 
                    //alert($(this).data('id'));
                    var newItemQuantity = $('#quantity'+itemId).val();    
                    //alert(newItemQuantity);   
                    $.ajax({
                        url: "scripts/changeitemquantity.php",
                        type: "POST",
                        data: {
                            itemId: itemId,
                            newItemQuantity: newItemQuantity,
                        },
                        cache: false,
                        success: function(dataResult){
                            var msg = "";
                            var dataResult = JSON.parse(dataResult);
                            if(dataResult.statusCode==200){
                                alert("Dane zostały zaktualizowane!");
                                $("#cartItems").load(location.href+" #cartItems>*","");//odświeża okno z danymi
                            }
                            else if(dataResult.statusCode==201){
                                alert("Error occured!");
                            }		
                        }
                    });	                              
                });
            });
        </script>
        <script>
            //DELETE Item from cart
            $(document).ready(function(){
                var itemId;
                $(document).on('click','button[data-role=delete]', function(){
                    itemId = $(this).data('id');       
                    //alert($(this).data('id'));              
                });
                $('#deleteItem').on('click', function() {			
                    $.ajax({
                        url: "scripts/deleteitem.php",
                        type: "POST",
                        data: {
                            itemId: itemId,
                        },
                        cache: false,
                        success: function(dataResult){
                            var msg = "";
                            var dataResult = JSON.parse(dataResult);
                            if(dataResult.statusCode==200){
                                $("#deleteItem").prop('disabled', true);
                                var msg = "produkt został usunięty!";
                                $("#messageDeleteItem").html(msg);
                                $("#cartItems").load(location.href+" #cartItems>*","");//odświeża okno z danymi
                                setTimeout(function() {$('#deleteItemModal').modal('hide');}, 1000);
                                setTimeout(function() {$("#deleteItem").prop('disabled', false);}, 1000);
                                setTimeout(function() {$("#messageDeleteItem").hide();}, 1000);
                            }
                            else if(dataResult.statusCode==201){
                                alert("Error occured!");
                            }		
                        }
                    });					
				});
            });
        </script>
	</head>
  <body>
		<header>
			<?php include 'header.php';?>
		</header>
	<main>
		<section class="mainContent">
            <div class="break"></div>
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action active btn-light">Koszyk</button>
                        </div>
                    </div>
                    <div class="col-10 bg-light">
						<div class="break"></div>				
						<div class="col-12 border p-0 table-responsive text-center" id="cartItems">
                            <?php
                                $sql = "SELECT product.name, product.brand, product.size, product.quantity, product.price, product.image,
                                        cart.id as cartID, cart.client_id, cartitem.id as cartItemID, cartitem.cart_id, cartitem.product_id, cartitem.product_quantity
                                        FROM product INNER JOIN cartitem ON product.id=cartitem.product_id 
                                        INNER JOIN cart ON cartitem.cart_id=cart.id
                                        WHERE cart.client_id='".$SESSION."'";
                                $result = mysqli_query($link, $sql);
                                //var_dump(mysqli_error($link));
                            ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nazwa</th>
                                        <th scope="col">Marka</th>
                                        <th scope="col">Rozmiar</th>
                                        <th scope="col">Liczba sztuk</th>
                                        <th scope="col">Cena</th>
                                        <th scope="col">Zdjęcie</th>
                                        <th scope="col">Akcja</th>
                                    </tr>
                                </thead>
                                <tbody class="cartTable" id="cartTable">
                                    <?php
                                        $amountToPay = 0;
                                        $iter = 0;
                                        if (mysqli_num_rows($result) > 0){
                                            while ($row = mysqli_fetch_assoc($result)){ 
                                                $amountToPay = $amountToPay + $row['price'];                                                          
                                    ?>
                                    <tr id="<?php echo $row['cartItemID']; ?>">
                                        <th scope="row" class="align-middle"><?php echo $iter = $iter + 1 ?></th>
                                        <td data-target="name" class="align-middle"><?php echo $row['name'] ?></td>
                                        <td data-target="brand" class="align-middle"><?php echo $row['brand'] ?></td>
                                        <td data-target="size" class="align-middle"><?php echo $row['size'] ?></td>
                                        <td data-target="product_quantity" class="align-middle"><input type="number" data-target="product_quantity" id="quantity<?php echo $row['cartItemID']; ?>" min="1" max="<?php echo $row['quantity'] ?>" value="<?php echo $row['product_quantity'] ?>"></td>
                                        <td data-target="price" class="align-middle"><?php echo $row['price'] ?> zł</td>
                                        <td data-target="image" class="align-middle"><img src="<?php echo $row['image'] ?>" style="width:60px; height:80px;"></td>
                                        <td class="align-middle">
                                            <button class="btn btn-primary btn-sm mb-1" type="button" data-role="update" data-id="<?php echo $row['cartItemID']; ?>" id="editItem">Aktualizuj</button>
                                            <button class="btn btn-danger btn-sm mt-1" type="button" data-role="delete" data-id="<?php echo $row['cartItemID']; ?>" data-toggle="modal" data-target="#deleteItemModal">Usuń</button>
                                        </td>
                                    </tr>
                                    <?php
                                            }
                                        }else{
                                            echo "Twój koszyk jest pusty.";
                                        }
                                    ?>
                                    <tr id="summary">
                                        <td colspan="4" class="align-middle font-weight-bold">PODSUMOWANIE:</td>
                                        <td class="align-middle font-weight-bold">Kwota:</td>
                                        <td class="align-middle font-weight-bold"><?php echo number_format($amountToPay, 2); ?> zł</td>
                                        <td colspan="2">
                                            <button class="btn btn-success btn" type="button">Przejdź do Kasy</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
						<div class="break"></div>
						<div class="break"></div>
                    </div>
                </div>
            </div>
		</section>
        <div class="break"></div>
	</main>		
    </body>
    <footer class="page-footer pt-4">
        <?php include 'foot.php';?>
    </footer>
</html>

<?php include 'modals/deleteitem.php';?>
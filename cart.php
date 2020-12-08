<?php
	include("config.php");

	$SESSION = $_SESSION['userid'];
?>
<?php
    if(!isset($_SESSION['userid'])){
        header('Location: index.php');
    }
?>
<!doctype html>
<html lang="pl">
	<head>
		<?php include 'head.php';?>
        <script>
        //AKTUALIZUJE DANE
            $(document).ready(function(){
                $(document).on('click','button[data-role=updateItem]', function(){
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
                                $(".allGoodCart").css('display', 'block');
                                setTimeout(function() {$(".allGoodCart").css('display', 'none');}, 2000);
                                $("#cartItems").load(location.href+" #cartItems>*","");//odświeża okno z danymi
                            }
                            else if(dataResult.statusCode==201){
                                $(".somethingWentWrongCart").css('display', 'block');
                                setTimeout(function() {$(".somethingWentWrongCart").css('display', 'none');}, 2000);
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
                $(document).on('click','button[data-role=deleteItem]', function(){
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
                            var dataResult = JSON.parse(dataResult);
                            if(dataResult.statusCode==200){
                                $(".allGood").css('display', 'block');
                                setTimeout(function() {$(".allGoodCart").css('display', 'none');}, 2000);
                                $("#deleteItem").prop('disabled', true);
                                $("#cartItems").load(location.href+" #cartItems>*","");//odświeża okno z danymi
                                setTimeout(function() {$('#deleteItemModal').modal('hide');}, 250);
                                setTimeout(function() {$("#deleteItem").prop('disabled', false);}, 250);
                                setTimeout(function() {$("#messageDeleteItem").hide();}, 250);
                            }
                            else if(dataResult.statusCode==201){
                                $(".somethingWentWrongCart").css('display', 'block');
                                setTimeout(function() {$(".somethingWentWrong").css('display', 'none');}, 2000);
                            }		
                        }
                    });					
				});
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#finlizeShopping').on('click', function() {
                    $('#finlizeShopping').prop('disabled', true);
                    var shippingMethod = $('#shippingMethod').val();
                    var phonenumber = $('#phonenumber').val();
                    var address = $('#address').val();
                    var address2 = $('#address2').val();
                    var city = $('#city').val();
                    var zipCode = $('#zipCode').val();
                    var voivodeship = $('#voivodeship').val();
                    //alert(shippingMethod);
                    $.ajax({
                        url: "scripts/finalizeorder.php",
                        type: "POST",
                        data: {
                            shippingMethod: shippingMethod,
                            phonenumber: phonenumber,
                            address: address,
                            address2: address2,
                            city: city,
                            zipCode: zipCode,
                            voivodeship: voivodeship
                        },
                        cache: false,
                        success: function(dataResult){
                            var msg = "";
                            var dataResult = JSON.parse(dataResult);
                            if(dataResult.statusCode==200){
                                var msg = "Zamówienie zostanie przekazane do realizacji po dokonaniu wpłaty na konto. Wszystkie dane zostaną przekazane niebawem w wiadomości email";
                                $("#messageCashDesk").html(msg);
                                setTimeout(function() {$('#cashDeskModal').modal('hide');}, 5000);
                                $("#cartItems").load(location.href+" #cartItems>*","");//odświeża okno z danymi
                                setTimeout(function() {$('#finlizeShopping').prop('disabled', false);}, 5000);
                            }
                            else if(dataResult.statusCode==201){
                                $(".somethingWentWrong").css('display', 'block');
                                setTimeout(function() {$(".somethingWentWrong").css('display', 'none');}, 2000);
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
            <div class="allGoodCart"><p>Dane zostały zaktualizowane!</p></div>
			<div class="somethingWentWrongCart"><p>Coś poszło nie tak!</p></div>
            <div class="break"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12 mt-1">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action active btn-light">Koszyk</button>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-12 bg-light mt-1">
						<div class="break"></div>				
						<div class="col-12 border p-0 table-responsive text-center" id="cartItems">
                            <?php
                                $sql = "SELECT product.name, product.brand, product.size, product.quantity, product.price, product.image,
                                        cart.id as cartID, cart.client_id, cartitem.id as cartItemID, cartitem.cart_id, cartitem.product_id, cartitem.product_quantity
                                        FROM product INNER JOIN cartitem ON product.id=cartitem.product_id 
                                        INNER JOIN cart ON cartitem.cart_id=cart.id
                                        WHERE cart.client_id='$SESSION'";
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
                                                $amountToPay = $amountToPay + $row['product_quantity']*$row['price'];                                                          
                                    ?>
                                    <tr id="<?php echo $row['cartItemID']; ?>">
                                        <th scope="row" class="align-middle"><?php echo $iter = $iter + 1 ?></th>
                                        <td data-target="name" class="align-middle"><?php echo $row['name'] ?></td>
                                        <td data-target="brand" class="align-middle"><?php echo $row['brand'] ?></td>
                                        <td data-target="size" class="align-middle"><?php echo $row['size'] ?></td>
                                        <td data-target="product_quantity" class="align-middle"><input type="number" data-target="product_quantity" id="quantity<?php echo $row['cartItemID']; ?>" min="1" max="<?php echo $row['quantity']+$row['product_quantity']; ?>" value="<?php echo $row['product_quantity'] ?>"></td>
                                        <td data-target="price" class="align-middle"><?php echo $row['price'] ?> zł</td>
                                        <td data-target="image" class="align-middle"><img src="<?php echo $row['image'] ?>" style="width:60px; height:80px;"></td>
                                        <td class="align-middle">
                                            <button class="btn btn-primary btn-sm mb-1" type="button" data-role="updateItem" data-id="<?php echo $row['cartItemID']; ?>" id="editItem">Aktualizuj</button>
                                            <button class="btn btn-danger btn-sm mb-1" type="button" data-role="deleteItem" data-id="<?php echo $row['cartItemID']; ?>" data-toggle="modal" data-target="#deleteItemModal">Usuń</button>
                                        </td>
                                    </tr>
                                    <?php
                                            }
                                        }else{
                                    ?>
                                            <td colspan="8"><?php echo "Twój koszyk jest pusty."; ?></td>
                                    <?php
                                        }
                                    ?>
                                    <tr id="summary">
                                        <td colspan="4" class="align-middle font-weight-bold">PODSUMOWANIE:</td>
                                        <td class="align-middle font-weight-bold">Kwota:</td>
                                        <td class="align-middle font-weight-bold"><?php echo number_format($amountToPay, 2); ?> zł</td>
                                        <td colspan="2">
                                            <button class="btn btn-success btn" type="button" data-toggle="modal" data-target="#cashDeskModal">Przejdź do Kasy</button>
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
<?php include 'modals/cashdesk.php';?>
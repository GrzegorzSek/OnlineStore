<?php

	include("config.php");
?>
<!doctype html>
<html lang="pl">
	<head>
        <?php include 'head.php';?>
        <script>
            //SKRYPT DO SZUKANIA
            $(document).ready(function(){
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#adminTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });
        </script>

        <script src="adduser.js"></script>
        <script src="edituser.js"></script>
        <script src="deleteuser.js"></script>
        <script src="deleteorderitem.js"></script>
        <script src="editorder.js"></script>
        <script src="deleteproduct.js"></script>
        <script src="addproduct.js"></script>
        <script src="editproduct.js"></script>
        <script>
            $(document).ready(function() {
                //Select do DODAWANIA produktu
                $("#productCategory").change(function() {
                    var val = $(this).val();
                    if (val == "1") {
                        $("#productSubcategory").html("<option value='1'>Spodnie</option><option value='2'>Koszulki</option><option value='3'>Bluzy</option>");
                    } else if (val == "2") {
                        $("#productSubcategory").html("<option value='4'>Botki</option><option value='5'>Na obcasie</option><option value='6'>Sportowe</option>");

                    } else if (val == "3") {
                        $("#productSubcategory").html("<option value='7'>Torby</option><option value='8'>Plecaki</option><option value='9'>Biżuteria</option>");

                    }
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
            <div id="error"></div>
            <div class="break"></div>
            <div class="container-fluid pt-1">
                <div class="row pb-1">
                    <div class="col-12">
                        <form class="form-inline float-right">
                            <button class="btn btn-primary mr-5" type="button" data-toggle="modal" data-target="#addProduct">Dodaj produkt</button>
                            <button class="btn btn-success mr-5" type="button" data-toggle="modal" data-target="#addUserModal" id="addUser">Dodaj użytkownika</button>
                            <input class="form-control mr-1" type="search" placeholder="szukaj" id="searchInput">
                        </form>
                    </div>
                </div>
                <div class="row pr-1">
                    <div class="col-1 border-left border-right border px-0 bg-light">
                        <div class="list-group" id="menu" role="tablist">
                            <button type="button" class="list-group-item list-group-item-action active btn-light btn-sm" data-toggle="list" href="#users" role="tab">Użytkownicy</button>
                            <button type="button" class="list-group-item list-group-item-action btn-light btn-sm" data-toggle="list" href="#orders" role="tab">Zamówienia</button>
                            <button type="button" class="list-group-item list-group-item-action btn-light btn-sm" data-toggle="list" href="#products" role="tab">Produkty</button>
                        </div>
                    </div>
                    <div class="col-11 border p-0 tab-content table-responsive" id="usersData">
                        <div class="tab-pane active" id="users" role="tabpanel">
                            <?php
                                $sql = "SELECT * FROM user";
                                $result = mysqli_query($link, $sql);
                            ?>
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">imię</th>
                                        <th scope="col">Nazwisko</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">nr telefonu</th>
                                        <th scope="col">Adres</th>
                                        <th scope="col">Adres 2</th>
                                        <th scope="col">Miasto</th>
                                        <th scope="col">Kod pocztowy</th>
                                        <th scope="col">Województwo</th>
                                        <th scope="col">Akcja</th>
                                    </tr>
                                </thead>
                                <tbody class="adminTable" id="adminTable">
                                    <?php
                                        $iter = 0;
                                        if (mysqli_num_rows($result) > 0){
                                            while ($row = mysqli_fetch_assoc($result)){                                                                
                                    ?>
                                    <tr id="<?php echo $row['id']; ?>">
                                        <th scope="row"><?php echo $iter = $iter + 1 ?></th>
                                        <td data-target="name"><?php echo $row['name'] ?></td>
                                        <td data-target="surname"><?php echo $row['surname'] ?></td>
                                        <td data-target="email"><?php echo $row['email'] ?></td>
                                        <td data-target="phonenumber"><?php echo $row['phonenumber'] ?></td>
                                        <td data-target="address"><?php echo $row['address'] ?></td>
                                        <td data-target="address2"><?php echo $row['address2'] ?></td>
                                        <td data-target="city"><?php echo $row['city'] ?></td>
                                        <td data-target="zipCode"><?php echo $row['zipCode'] ?></td>
                                        <td data-target="voivodeship"><?php echo $row['voivodeship'] ?></td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" type="button" data-role="update" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#editUserModal" id="editUser">Edytuj</button>
                                            <button class="btn btn-danger btn-sm" type="button" data-role="delete" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#deleteUserModal">Usuń</button>
                                        </td>
                                    </tr>
                                    <?php
                                            }
                                        }else{
                                            echo "nie ma więcej danych.";
                                        }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="orders" role="tabpanel">
                            <?php
                                $sql = "SELECT * FROM clientorder";
                                $result = mysqli_query($link, $sql);
                                //var_dump(mysqli_error($link));
                            ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nr zamówienia</th>
                                        <th scope="col">Sposób wysyłki</th>
                                        <th scope="col">Kwota</th>
                                        <th scope="col">Numer telefonu</th>
                                        <th scope="col">Adres</th>
                                        <th scope="col">Data złożenia zamówienia</th>
                                        <th scope="col">Ostatnia aktualizacja</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Akcja</th>
                                    </tr>
                                </thead>
                                <tbody class="orderTable" id="orderTable">
                                    <?php
                                        $iter = 0;
                                        if (mysqli_num_rows($result) > 0){
                                            while ($row = mysqli_fetch_assoc($result)){                                                         
                                    ?>
                                    <tr id="<?php echo $row['id']; ?>">
                                        <th scope="row" class="align-middle"><?php echo $iter = $iter + 1 ?></th>
                                        <td data-target="orderNumber" class="align-middle"><?php echo $row['id']; ?></td>
                                        <td data-target="shippingMethod" class="align-middle"><?php echo $row['shipping_method']; ?></td>
                                        <td data-target="amountToPay" class="align-middle"><?php echo $row['amounttopay']; ?></td>
                                        <td data-target="phoneNumber" class="align-middle"><?php echo $row['phonenumber']; ?></td>
                                        <td data-target="shippingData"><?php echo $row['address']."\r\n".$row['address2'].", ".$row['city']." ".$row['zipCode'].", ".$row['voivodeship']; ?></td>
                                        <td data-target="created_at" class="align-middle"><?php echo $row['created_at']; ?></td>
                                        <td data-target="recentUpdate" class="align-middle"><?php echo $row['updated_at']; ?></td>
                                        <td data-target="orderStatus" class="align-middle"><?php echo $row['order_status']; ?></td>
                                        <td class="align-middle">
                                            <button class="btn btn-success btn-sm" type="button" data-role="updateOrder" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#updateOrder">Edytuj</button>
                                            <button class="btn btn-primary btn-sm" type="button" data-role="adminOrderContent" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#adminOrderContent">Wyświetl zawartość</button>
                                        </td>
                                    </tr>
                                    <?php
                                            }
                                        }else{
                                    ?>
                                            <td colspan="10"><?php echo "Nie ma żadnych zamówień"; ?></td>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="products" role="tabpanel">
                        <?php
                                $sql = "SELECT product.id, product.name, product.price, product.colour, product.description, product.category_id, 
                                product.subcategory_id, product.quantity, product.brand, product.size, product.image, category.name as cat_name,
                                category.id as cat_id, subcategory.id as subcat_id, subcategory.name as subcat_name 
                                FROM product INNER JOIN subcategory ON product.subcategory_id=subcategory.id
                                INNER JOIN category ON category.id=subcategory.category_id";

                                $result = mysqli_query($link, $sql);
                            ?>
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nazwa</th>
                                        <th scope="col">Cena</th>
                                        <th scope="col">Kolor</th>
                                        <th scope="col">Opis</th>
                                        <th scope="col">Ketegoria</th>
                                        <th scope="col">Podkategoria</th>
                                        <th scope="col">Liczba sztuk</th>
                                        <th scope="col">Marka</th>
                                        <th scope="col">Rozmiar</th>
                                        <th scope="col">Zdjęcia</th>
                                        <th scope="col">Akcja</th>
                                    </tr>
                                </thead>
                                <tbody class="productTable" id="productTable">
                                    <?php
                                        $iter = 0;
                                        if (mysqli_num_rows($result) > 0){
                                            while ($row = mysqli_fetch_assoc($result)){                                                                
                                    ?>
                                    <tr id="<?php echo $row['id']; ?>">
                                        <th scope="row"><?php echo $iter = $iter + 1 ?></th>
                                        <td data-target="name"><?php echo $row['name'] ?></td>
                                        <td data-target="price"><?php echo $row['price'] ?></td>
                                        <td data-target="colour"><?php echo $row['colour'] ?></td>
                                        <td data-target="description"><?php echo $row['description'] ?></td>
                                        <td data-target="category"><?php echo $row['cat_name'] ?></td>
                                        <td data-target="subcategory"><?php echo $row['subcat_name'] ?></td>
                                        <td data-target="quantity"><?php echo $row['quantity'] ?></td>
                                        <td data-target="brand"><?php echo $row['brand'] ?></td>
                                        <td data-target="size"><?php echo $row['size'] ?></td>
                                        <td data-target="image"><img src="<?php echo $row['image'] ?>" style="width:60px; height:80px;"></td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" type="button" data-role="updateProduct" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#updateProductModal">Edytuj</button>
                                            <button class="btn btn-danger btn-sm" type="button" data-role="deleteProduct" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#deleteProductModal">Usuń</button>
                                        </td>
                                    </tr>
                                    <?php
                                            }
                                        }else{
                                            echo "nie ma więcej danych.";
                                        }
                                    ?>

                                </tbody>
                            </table>
                        </div>
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

<?php include 'modals/adduser.php';?>
<?php include 'modals/edituserdata.php';?>
<?php include 'modals/deleteuser.php';?>
<?php include 'modals/adminordercontent.php';?>
<?php include 'modals/adminorderdata.php';?>
<?php include 'modals/deleteproduct.php';?>
<?php include 'modals/updateproduct.php';?>
<?php include 'modals/addproduct.php';?>

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

        <script>
			//ADD USER SCRIPT
			$(document).ready(function() {
				$('#butsave').on('click', function() {
					var name = $('#name').val();
					var surname = $('#surname').val();
					var email = $('#email').val();
					var password = $('#password').val();
					var phonenumber = $('#phonenumber').val();
					var address = $('#address').val();
					var address2 = $('#address2').val();
					var city = $('#city').val();
					var zipCode = $('#zipCode').val();
					var inputVoivodeship = $('#inputVoivodeship').val();
					if(name!="" && surname!="" && email!="" && password!="" && phonenumber!="" && address!="" && address2!="" && city!="" && zipCode!=""){
						$.ajax({
							url: "registersave.php",
							type: "POST",
							data: {
								name: name,
								surname: surname,
								email: email,
								password: password,
								phonenumber: phonenumber,
								address: address,
								address2: address2,
								city: city,			
								zipCode: zipCode,
								voivodeship: inputVoivodeship,
							},
							cache: false,
							success: function(dataResult){
								var msg = "";
								var dataResult = JSON.parse(dataResult);
								if(dataResult.statusCode==200){
									var msg = "Użytkownik został dodany!";
									$("#messageAddUser").html(msg);
									setTimeout(function() {$('#addUserModal').modal('hide');}, 2000);
								}
								else if(dataResult.statusCode==201){
								alert("Error occured!");
								}
								
							}
						});
					}
					else{
						alert('Uzupełnij wszystkie pola!');
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
            <div class="break"></div>
            <div class="container-fluid pt-1">
                <div class="row pb-1">
                    <div class="col-12">
                        <form class="form-inline float-right">
                            <button class="btn btn-success mr-5" type="button" data-toggle="modal" data-target="#addUserModal" id="addUser">Dodaj użytkownika</button>
                            <input class="form-control mr-1" type="search" placeholder="szukaj" id="searchInput">
                            <!-- <button class="btn btn-dark" type="submit">znajdź</button> -->
                        </form>
                    </div>
                </div>
                <div class="row pr-1">
                    <div class="col-1 border-left border-right border px-0 bg-light">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action active btn-light btn-sm">Użytkownicy</button>
                            <button type="button" class="list-group-item list-group-item-action btn-light btn-sm">Zamówienia</button>
                            <button type="button" class="list-group-item list-group-item-action btn-light btn-sm">Produkty</button>
                        </div>
                    </div>
                    <div class="col-11 border p-0">
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
                                <tr>
                                    <th scope="row"><?php echo $iter = $iter + 1 ?></th>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['surname'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['phonenumber'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td><?php echo $row['address2'] ?></td>
                                    <td><?php echo $row['city'] ?></td>
                                    <td><?php echo $row['zipCode'] ?></td>
                                    <td><?php echo $row['voivodeship'] ?></td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" type="button">edytuj</button>
                                        <button class="btn btn-danger btn-sm" type="button">usuń</button>
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
		</section>
        <div class="break"></div>
    </main>		
    </body>
    <footer class="page-footer pt-4">
        <?php include 'foot.php';?>
    </footer>
</html>

<?php include 'adduser.php';?>
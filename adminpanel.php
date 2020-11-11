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
					var name = $('#addName').val();
					var surname = $('#addSurname').val();
					var email = $('#addEmail').val();
					var password = $('#addPassword').val();
					var phonenumber = $('#addPhonenumber').val();
					var address = $('#addAddress').val();
					var address2 = $('#addAddress2').val();
					var city = $('#addCity').val();
					var zipCode = $('#addZipCode').val();
					var voivodeship = $('#addVoivodeship').val();
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
								voivodeship: voivodeship,
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

        <script>
            //EDIT SCRIPT
            $(document).ready(function(){
                $(document).on('click','button[data-role=update]',function(){
                    //alert($(this).data('id'));
                    var id = $(this).data('id');
                    var name = $('#'+id).children('td[data-target=name]').text();
                    var surname = $('#'+id).children('td[data-target=surname]').text();
                    var email = $('#'+id).children('td[data-target=email]').text();
                    var phonenumber = $('#'+id).children('td[data-target=phonenumber]').text();
                    var address = $('#'+id).children('td[data-target=address]').text();
                    var address2 = $('#'+id).children('td[data-target=address2]').text();
                    var city = $('#'+id).children('td[data-target=city]').text();
                    var zipCode = $('#'+id).children('td[data-target=zipCode]').text();
                    var voivodeship = $('#'+id).children('td[data-target=voivodeship]').text();

                    $('#userId').val(id);
                    $('#name').val(name);
                    $('#surname').val(surname);
                    $('#email').val(email);
                    $('#phonenumber').val(phonenumber);
                    $('#address').val(address);
                    $('#address2').val(address2);
                    $('#city').val(city);
                    $('#zipCode').val(zipCode);
                    $('#voivodeship').val(voivodeship);                           
                });
                $('#update').on('click', function() {
                    var id = $('#userId').val();
					var name = $('#name').val();
					var surname = $('#surname').val();
					var email = $('#email').val();
					var password = $('#password').val();
					var phonenumber = $('#phonenumber').val();
					var address = $('#address').val();
					var address2 = $('#address2').val();
					var city = $('#city').val();
					var zipCode = $('#zipCode').val();
					var voivodeship = $('#voivodeship').val();
					if(name!="" && surname!="" && email!="" && password!="" && phonenumber!="" && address!="" && address2!="" && city!="" && zipCode!="" && voivodeship!=""){
						$.ajax({
							url: "editusermodal.php",
							type: "POST",
							data: {
                                id: id,
								name: name,
								surname: surname,
								email: email,
								password: password,
								phonenumber: phonenumber,
								address: address,
								address2: address2,
								city: city,			
								zipCode: zipCode,
								voivodeship: voivodeship,
							},
							cache: false,
							success: function(dataResult){
								var msg = "";
								var dataResult = JSON.parse(dataResult);
								if(dataResult.statusCode==200){
									var msg = "Dane użytkownika zostały zaktualizowane!";
									$("#messageEditUser").html(msg);
									setTimeout(function() {$('#editUserModal').modal('hide');}, 2000);
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
                                        <button class="btn btn-danger btn-sm" type="button">Usuń</button>
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
<?php include 'edituserdata.php';?>
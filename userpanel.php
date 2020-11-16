<?php
	include("config.php");

	$SESSION = $_SESSION['userid'];
	$sql_query = "SELECT * FROM user WHERE id='$SESSION'";
	$result = mysqli_query($link, $sql_query);
	$row = mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="pl">
	<head>
		<?php include 'head.php';?>
		<script>
		//UPDATE USER
			$(document).ready(function() {
				$('#buttonUpdate').on('click', function() {
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
					if(name!="" && surname!="" && email!="" && password!="" && phonenumber!="" && address!="" && address2!="" && city!="" && zipCode!=""){
						$.ajax({
							url: "scripts/updateuser.php",
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
									var msg = "Udało się zaktualizować Twoje dane!";
									$("#messageUpdateUser").html(msg);
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
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action active btn-light">Dane</button>
                            <button type="button" class="list-group-item list-group-item-action btn-light">Zamówienia</button>
                        </div>
                    </div>
                    <div class="col-10 bg-light">
						<div class="break"></div>				
						<form>
							<div class="form-row">
								<div class="form-group col-md-12" id="messageUpdateUser"></div>
								<div class="form-group col-6">
									<label for="name">Imię:</label>
									<input type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>">
								</div>
								<div class="form-group col-6">
									<label for="surname">Nazwisko:</label>
									<input type="text" class="form-control" id="surname" value="<?php echo $row['surname']; ?>">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-6">
									<label for="email">Email:</label>
									<input type="email" class="form-control" id="email" value="<?php echo $row['email']; ?>">
								</div>
								<div class="form-group col-6">
									<label for="password">Hasło:</label>
									<input type="password" class="form-control" id="password" value="<?php echo $row['password']; ?>">
								</div>
							</div>	
							<div class="form-row">
								<div class="form-group col-6">
									<label for="phonenumber">Numer telefonu:</label>
									<input type="text" class="form-control" id="phonenumber" value="<?php echo $row['phonenumber']; ?>">
								</div>
								<div class="form-group col-6">
									<label for="address">Adres:</label>
									<input type="text" class="form-control" id="address" value="<?php echo $row['address']; ?>">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-6">
									<label for="address2">Adres 2:</label>
									<input type="text" class="form-control" id="address2" value="<?php echo $row['address2']; ?>">
								</div>
								<div class="form-group col-6">
									<label for="city">Miasto:</label>
									<input type="text" class="form-control" id="city" value="<?php echo $row['city']; ?>">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-6">
									<label for="zipCode">Kod pocztowy:</label>
									<input type="text" class="form-control" id="zipCode" value="<?php echo $row['zipCode']; ?>">
								</div>
								<div class="form-group col-6">
									<label for="voivodeship">Województwo:</label>
									<input type="text" class="form-control" id="voivodeship" value="<?php echo $row['voivodeship']; ?>">
								</div>
							</div>
							<div class="form-row float-right pr-3">
								<button type="button" class="btn btn-primary" id="buttonUpdate">Zaktualizuj</button>
							</div>
						</form>
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

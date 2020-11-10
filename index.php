<?php

	include("config.php");
?>
<!doctype html>
<html lang="pl">
	<head>
		<?php include 'head.php';?>
		<!--<script>
		//SPRAWDZA PUSTE POLA
		(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('butsave', function(event) {
				if (form.checkValidity() === false) {
				event.preventDefault();
				event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
			});
		}, false);
		})();
		</script>-->

		<script>
			//LOGIN SCRIPT
			$(document).ready(function(){

				$("#but_submit").click(function(){
					var email = $("#email").val().trim();
					var password = $("#password").val().trim();

					if( email != "" && password != "" ){
						$.ajax({
							url:'checkuser.php',
							type:'post',
							data:{email:email,password:password},
							success:function(response){
								var msg = "";
								if(response == 1){
									window.location = "dashboard.php";
								}else{
									msg = "Błędny email lub hasło!";
								}
								$("#message").html(msg);
								return false;
							}
						});
					}
				});

			});
		</script>

		<script>
			//REJESTRACJA
			$(document).ready(function() {
				$('#butsave').on('click', function() {
					//$("#butsave").attr("disabled", "disabled");
					var name = $('#name').val();
					var surname = $('#surname').val();
					var emailSignUp = $('#emailSignUp').val();
					var password = $('#password').val();
					var phonenumber = $('#phonenumber').val();
					var address = $('#address').val();
					var address2 = $('#address2').val();
					var city = $('#city').val();
					var zipCode = $('#zipCode').val();
					var inputVoivodeship = $('#inputVoivodeship').val();
					if(name!="" && surname!="" && emailSignUp!="" && phonenumber!="" && address!="" && address2!="" && city!="" && zipCode!=""){
						$.ajax({
							url: "registersave.php",
							type: "POST",
							data: {
								name: name,
								surname: surname,
								email: emailSignUp,
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
								var dataResult = JSON.parse(dataResult);
								if(dataResult.statusCode==200){
									$("#butsave").removeAttr("disabled");
									$('#fupForm').find('input:text').val('');
									$("#success").show();
									$('#success').html('Dane zostały zapisane!'); 						
								}
								else if(dataResult.statusCode==201){
								alert("Error occured !");
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
			<nav class="navbar fixed-top navbar-light bg-light navbar-expand-lg">
				<a class="navbar-brand" href="#">LOGO</a>			

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse text-uppercase" id="mainMenu">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php"> Główna</a>						
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"> Kat 1</a>						
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"> Kat 2</a>	
							<div class="dropdown-menu">
								<a class="dropdown-item" href="listofproducts.php">podKat1</a>
								<a class="dropdown-item" href="#">podKat2</a>
								<a class="dropdown-item" href="#">podKat3</a>
								<a class="dropdown-item" href="#">podKat4</a>
								<a class="dropdown-item" href="#">podKat5</a>
							</div>					
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"> Kat 3</a>						
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"> Kontakt</a>						
						</li>
					</ul>

					<form class="form-inline mr-auto">
						<input class="form-control mr-1" type="search" placeholder="szukaj">
						<button class="btn btn-secondary" type="submit">znajdź</button>
					</form>

					<ul class="navbar-nav">
						<li class="nav-item">
							<img src="favicons/myAccountIcon.png" data-toggle="modal" data-target="#signIn" alt="myAccountIcon" style="cursor: pointer">				
						</li>
						<li class="nav-item">
							<img src="favicons/shoppingCartIcon.png" data-toggle="modal" data-target="#userShoppingCart" alt="shoppingCartIcon" style="cursor: pointer"></a>						
						</li>
					</ul>
				</div>
			</nav>
		</header>
	<main>
		<section class="homePage">
			<?php include 'carousel.php';?>
			<div class="break"></div>
			<div class="container"> 
				<div class="row">
					<!-- Here photos-->					
					<div class="col-sm-6 col-md-4">
						<figure> 
							<a href="productdetails.php"><img src="img/marynarka.jpg" alt="dress2"></a>
						</figure>
					</div>
					<div class="col-sm-6 col-md-4">
						<figure>
							<a href="#"><img src="img/marynarka.jpg" alt="dress3"></a>
						</figure>
					</div>
					<div class="col-sm-6 col-md-4">
						<figure>
							<a href="#"><img src="img/marynarka.jpg" alt="dress4"></a>
						</figure>
					</div>	
					<div class="col-sm-6 col-md-4">
						<figure>
							<a href="#"><img src="img/marynarka.jpg" alt="dress2"></a>
						</figure>
					</div>
					<div class="col-sm-6 col-md-4">
						<figure>
							<a href="#"><img src="img/marynarka.jpg" alt="dress3"></a>
						</figure>
					</div>
					<div class="col-sm-6 col-md-4">
						<figure>
							<a href="#"><img src="img/marynarka.jpg" alt="dress4"></a>
						</figure>
					</div>
					<div class="col-sm-6 col-md-4">
						<figure>
							<a href="#"><img src="img/marynarka.jpg" alt="dress2"></a>
						</figure>
					</div>
					<div class="col-sm-6 col-md-4">
						<figure>
							<a href="#"><img src="img/marynarka.jpg" alt="dress3"></a>
						</figure>
					</div>
					<div class="col-sm-6 col-md-4">
						<figure>
							<a href="#"><img src="img/marynarka.jpg" alt="dress4"></a>
						</figure>
					</div>				
				</div>
			</div>
		</section>
	</main>		
  </body>
  <footer class="page-footer pt-4">
	<?php include 'foot.php';?>
  </footer>
</html>

<?php include 'loginform.php';?>
<?php include 'signupform.php';?>


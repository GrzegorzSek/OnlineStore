<!doctype html>
<html lang="pl">
	<head>
		<?php include 'head.php';?>
		<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
				event.preventDefault();
				event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
			});
		}, false);
		})();
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
							<img src="favicons/myAccountIcon.png" data-toggle="modal" data-target="#signIn" alt="myAccountIcon">				
						</li>
						<li class="nav-item">
							<img src="favicons/shoppingCartIcon.png" data-toggle="modal" data-target="#userShoppingCart" alt="shoppingCartIcon"></a>						
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


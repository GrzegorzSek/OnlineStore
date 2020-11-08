<!doctype html>
<html lang="pl">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<title>Online store</title>
		<meta name="description" content="Online store">
		<meta name="keywords" content="Online store">
		<meta name="author" content="Grzegorz Sęk">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/main.css">
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
			<!-- CAROUSEL -->
			<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselIndicators" data-slide-to="1"></li>
					<li data-target="#carouselIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-75" src="img/landscape1.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>DUZY tekst</h5>
							<p>mniejszy tekst</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-75" src="img/landscape2.jpg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Większy tekst2</h5>
							<p>mniejszy tekst2</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-75" src="img/landscape3.jpg" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Większy tekst3</h5>
							<p>mniejszy tekst3</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="break">
			</div>
			<div class="col-lg-12 mb-2">
							<!-- sortowanie -->
				<div class="row">
					<div class="col-xs-6 col-lg-2 offset-lg-5">
						<div class="d-flex flex-wrap">
							<div class="select-outline position-relative w-100">
							<select class="sorting mdb-select md-outline md-form mt-2">
								<option value="" disabled selected>sortuj według</option>
								<option value="1">cena w górę</option>
								<option value="2">cena w dół</option>
								<option value="3">A-Z</option>
								<option value="4">Z-A</option>
							</select>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-lg-2 text-center">
							<ul class="pagination justify-content-center float-md-right mb-0">
							<li class="page-item"><a class="page-link">&#60<i></i></a></li>
							<li class="page-item"><a class="page-link">1</a></li>
							<li class="page-item"><a class="page-link">2</a></li>
							<li class="page-item"><a class="page-link">3</a></li>
							<li class="page-item"><a class="page-link">&#62<i></i></a></li>
							</ul>
					</div>
				</div>
			</div>
					<!--sortowanie-->
			<div class="container">
				<div class="row">
					<div class="col-lg-2 bg-light border pt-2">
						<h5>Podkategorie</h5>

						<div class="text-left text-dark small text-uppercase mb-5">
							<p class="mb-4">wróć do <a href="#!" class="card-link-secondary"><strong>ubrania</strong></a></p>

							<p class="mb-3"><a href="#!" class="card-link-secondary link-dark">kat1</a></p>
							<p class="mb-3"><a href="#!" class="card-link-secondary link-dark">kat1</a></p>
							<p class="mb-3"><a href="#!" class="card-link-secondary">kat1</a></p>
							<p class="mb-3"><a href="#!" class="card-link-secondary">kat1</a></p>
							<p class="mb-3"><a href="#!" class="card-link-secondary">kat1</a></p>
							<p class="mb-3"><a href="#!" class="card-link-secondary">kat1</a></p>
						</div>
						<h6 class="font-weight-bold mb-3">Cena</h6>

						<div class="form-check pl-3 mb-3 text-left">
							<input type="radio" class="form-check-input" id="under25" name="materialExampleRadios">
							<label class="form-check-label small text-uppercase card-link-secondary" for="under25">&lt25zł</label>
						</div>
						<div class="form-check pl-3 mb-3 text-left">
							<input type="radio" class="form-check-input" id="2550" name="materialExampleRadios">
							<label class="form-check-label small text-uppercase card-link-secondary" for="2550">25-50zł</label>
						</div>
						<div class="form-check pl-3 mb-3 text-left">
							<input type="radio" class="form-check-input" id="50100" name="materialExampleRadios">
							<label class="form-check-label small text-uppercase card-link-secondary" for="50100">50-100zł</label>
						</div>
						<div class="form-check pl-3 mb-3 text-left">
							<input type="radio" class="form-check-input" id="100200" name="materialExampleRadios">
							<label class="form-check-label small text-uppercase card-link-secondary" for="100200">100-200zł</label>
						</div>
						<div class="form-check pl-3 mb-3 text-left">
							<input type="radio" class="form-check-input" id="200above" name="materialExampleRadios">
							<label class="form-check-label small text-uppercase card-link-secondary" for="200above">200zł&gt</label>
						</div>
						<form>
							<div class="d-flex align-items-center mt-4 pb-1">
								<div class="md-form md-outline my-0">
									<input id="from" type="text" class="form-control mb-0">
									<label for="form">zł min</label>
								</div>
								<p class="px-2 mb-0 text-muted"> - </p>
								<div class="md-form md-outline my-0">
									<input id="to" type="text" class="form-control mb-0">
									<label for="to">zł max</label>
								</div>
							</div>
						</form>
					
					<!-- rozmiar -->
					<h6 class="font-weight-bold mb-3">Rozmiar</h6>

					<div class="form-check pl-0 mb-3">
						<input type="checkbox" class="form-check-input filled-in" id="34">
						<label class="form-check-label small text-uppercase card-link-secondary" for="34">34</label>
					</div>
					<div class="form-check pl-0 mb-3">
						<input type="checkbox" class="form-check-input filled-in" id="36">
						<label class="form-check-label small text-uppercase card-link-secondary" for="36">36</label>
					</div>
					<div class="form-check pl-0 mb-3">
						<input type="checkbox" class="form-check-input filled-in" id="38">
						<label class="form-check-label small text-uppercase card-link-secondary" for="38">38</label>
					</div>
					<div class="form-check pl-0 mb-3">
						<input type="checkbox" class="form-check-input filled-in" id="40">
						<label class="form-check-label small text-uppercase card-link-secondary" for="40">40</label>
					</div>
					<a class="btn btn-link text-muted p-0" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						Więcej
					</a>
					<div class="collapse pt-3" id="collapseExample">
						<div class="form-check pl-0 mb-3">
							<input type="checkbox" class="form-check-input filled-in" id="42">
							<label class="form-check-label small text-uppercase card-link-secondary" for="42">42</label>
						</div>
						<div class="form-check pl-0 mb-3">
							<input type="checkbox" class="form-check-input filled-in" id="44">
							<label class="form-check-label small text-uppercase card-link-secondary" for="44">44</label>
						</div>
						<div class="form-check pl-0 mb-3">
							<input type="checkbox" class="form-check-input filled-in" id="46">
							<label class="form-check-label small text-uppercase card-link-secondary" for="46">46</label>
						</div>
						<div class="form-check pl-0 mb-3">
							<input type="checkbox" class="form-check-input filled-in" id="50">
							<label class="form-check-label small text-uppercase card-link-secondary" for="50">50</label>
						</div>
					</div>
					</div>
					<!--rozmiar -->				
					<div class="col-lg-10">
					<div class="row">
					<div class="col-sm-6 col-md-4 mb-3">
						<a href="#!">
							<div class="mask">
							<img class="img-fluid"
								src="img/tshirt.jpg">
							<div class="mask rgba-black-slight"></div>
							</div>
						</a>
						

						<div class="text-center pt-4">

						<h5>koszulka</h5>
						<hr>
						<h6 class="mb-3">9,99 zł</h6>
						<button type="button" class="btn btn-primary btn-sm mr-1 mb-2">do koszyka</button>
						<button type="button" class="btn btn-light btn-sm mr-1 mb-2" ><a href="productdetails.php">szczegóły</a></button>

						</div>
						</div>
						<div class="col-sm-6 col-md-4 mb-3">
						<a href="#!">
							<div class="mask">
							<img class="img-fluid"
								src="img/tshirt.jpg">
							<div class="mask rgba-black-slight"></div>
							</div>
						</a>
						

						<div class="text-center pt-4">

						<h5>koszulka</h5>
						<hr>
						<h6 class="mb-3">9,99 zł</h6>
						<button type="button" class="btn btn-primary btn-sm mr-1 mb-2">do koszyka</button>
						<button type="button" class="btn btn-light btn-sm mr-1 mb-2">szczegóły</button>

						</div>
						</div>
						<div class="col-sm-6 col-md-4 mb-3">
						<a href="#!">
							<div class="mask">
							<img class="img-fluid"
								src="img/tshirt.jpg">
							<div class="mask rgba-black-slight"></div>
							</div>
						</a>
						

						<div class="text-center pt-4">

						<h5>koszulka</h5>
						<hr>
						<h6 class="mb-3">9,99 zł</h6>
						<button type="button" class="btn btn-primary btn-sm mr-1 mb-2">do koszyka</button>
						<button type="button" class="btn btn-light btn-sm mr-1 mb-2">szczegóły</button>

						</div>
						</div>
						<div class="col-sm-6 col-md-4 mb-3">
						<a href="#!">
							<div class="mask">
							<img class="img-fluid"
								src="img/tshirt.jpg">
							<div class="mask rgba-black-slight"></div>
							</div>
						</a>
						

						<div class="text-center pt-4">

						<h5>koszulka</h5>
						<hr>
						<h6 class="mb-3">9,99 zł</h6>
						<button type="button" class="btn btn-primary btn-sm mr-1 mb-2">do koszyka</button>
						<button type="button" class="btn btn-light btn-sm mr-1 mb-2">szczegóły</button>

						</div>
						</div>
						<div class="col-sm-6 col-md-4 mb-3">
						<a href="#!">
							<div class="mask">
							<img class="img-fluid"
								src="img/tshirt.jpg">
							<div class="mask rgba-black-slight"></div>
							</div>
						</a>
						

						<div class="text-center pt-4">

						<h5>koszulka</h5>
						<hr>
						<h6 class="mb-3">9,99 zł</h6>
						<button type="button" class="btn btn-primary btn-sm mr-1 mb-2">do koszyka</button>
						<button type="button" class="btn btn-light btn-sm mr-1 mb-2">szczegóły</button>

						</div>
						</div>
						<div class="col-sm-6 col-md-4 mb-3">
						<a href="#!">
							<div class="mask">
							<img class="img-fluid"
								src="img/tshirt.jpg">
							<div class="mask rgba-black-slight"></div>
							</div>
						</a>
						

						<div class="text-center pt-4">

						<h5>koszulka</h5>
						<hr>
						<h6 class="mb-3">9,99 zł</h6>
						<button type="button" class="btn btn-primary btn-sm mr-1 mb-2">do koszyka</button>
						<button type="button" class="btn btn-light btn-sm mr-1 mb-2">szczegóły</button>

						</div>
						</div>
						<div class="col-sm-6 col-md-4 mb-3">
						<a href="#!">
							<div class="mask">
							<img class="img-fluid"
								src="img/tshirt.jpg">
							<div class="mask rgba-black-slight"></div>
							</div>
						</a>
						

						<div class="text-center pt-4">

						<h5>koszulka</h5>
						<hr>
						<h6 class="mb-3">9,99 zł</h6>
						<button type="button" class="btn btn-primary btn-sm mr-1 mb-2">do koszyka</button>
						<button type="button" class="btn btn-light btn-sm mr-1 mb-2">szczegóły</button>

						</div>
						</div>
						<div class="col-sm-6 col-md-4 mb-3">
						<a href="#!">
							<div class="mask">
							<img class="img-fluid"
								src="img/tshirt.jpg">
							<div class="mask rgba-black-slight"></div>
							</div>
						</a>
						

						<div class="text-center pt-4">

						<h5>koszulka</h5>
						<hr>
						<h6 class="mb-3">9,99 zł</h6>
						<button type="button" class="btn btn-primary btn-sm mr-1 mb-2">do koszyka</button>
						<button type="button" class="btn btn-light btn-sm mr-1 mb-2">szczegóły</button>

						</div>
						</div>
						<div class="col-sm-6 col-md-4 mb-3">
						<a href="#!">
							<div class="mask">
							<img class="img-fluid"
								src="img/tshirt.jpg">
							<div class="mask rgba-black-slight"></div>
							</div>
						</a>
						

						<div class="text-center pt-4">

						<h5>koszulka</h5>
						<hr>
						<h6 class="mb-3">9,99 zł</h6>
						<button type="button" class="btn btn-primary btn-sm mr-1 mb-2">do koszyka</button>
						<button type="button" class="btn btn-light btn-sm mr-1 mb-2">szczegóły</button>

						</div>
						</div>
					</div>
					<!-- produkty -->
						
					</div>	
				</div>
			</div>
		</section>
	</main>		
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
  </body>
	<footer class="page-footer pt-4">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-md-4">
					<h6 class="text-uppercase">O nas</h6>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu lectus sit amet velit ullamcorper tincidunt eu vitae nulla. Vivamus et eros ut nisi posuere tincidunt. Aliquam a diam ex. Donec quis rhoncus ligula, sed imperdiet ligula. Etiam condimentum felis ac egestas condimentum. Proin tempor fringilla laoreet. In ut turpis odio.</p>
				</div>

			<div class="col-xs-6 col-md-4">
				<h6 class="text-uppercase">Kategorie</h6>
				<ul class="footer-links list-unstyled">
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
				<li><a href="#">Link 4</a></li>
				<li><a href="#">Link 5</a></li>
				<li><a href="#">Link 6</a></li>
				</ul>
			</div>

			<div class="col-xs-6 col-md-4">
				<h6 class="text-uppercase">Przydatne linki</h6>
				<ul class="footer-links list-unstyled">
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
				<li><a href="#">Link 4</a></li>
				<li><a href="#">Link 5</a></li>
				<li><a href="#">Link 6</a></li>
				</ul>
			</div>
			
			</div>
			</div>
			<div class="footer-copyright text-center py-3">© 2020 Copyright:
				<a href="#">Link</a>
			</div>
	    </div>
	</footer>
</html>

<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="signIn" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signIn">Logowanie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<label>Adres e-mail</label>
		<input type="email" placeholder="e-mail" name="e-mail" class="form-control" id="e-mailAdress"/>
		<label>Hasło</label>
		<input type="password" placeholder="hasło" name="password" class="form-control" id="password"/>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-primary" data-toggle="modal" href="#signUp">Nie masz konta? Zarejestruj się.</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
        <button type="button" class="btn btn-primary">Zaloguj</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="signUp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signUp">Rejestracja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 	<label>Imię</label>
		<input type="text" placeholder="imię" name="name" class="form-control" id="name"/>
		<label>Nazwisko</label>
		<input type="text" placeholder="nazwisko" name="surname" class="form-control" id="surname"/>
		<label>Adres</label>
		<input type="text" placeholder="adres" name="address" class="form-control" id="address"/>
		<label>Adres 2</label>
		<input type="text" placeholder="adres 2" name="address2" class="form-control" id="address2"/>
		<label>numer telefonu</label>
		<input type="tel" placeholder="numer telefonu" name="phone" class="form-control" id="phone" pattern="[0-9]{9}" maxlength="9" required/>
		<label>Adres e-mail</label>
		<input type="email" placeholder="e-mail" name="e-mail" class="form-control" id="e-mailAdress"/>
		<label>Hasło</label>
		<input type="password" placeholder="hasło" name="password" class="form-control" id="password"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
        <button type="button" class="btn btn-primary">Zarejestruj</button>
      </div>
    </div>
  </div>
</div>
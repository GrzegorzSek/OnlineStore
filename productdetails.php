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
			<div class="break"></div>
			<div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="col-12">
                            <figure>
                                <a href="#"><img src="img/marynarka.jpg"></a>
                            </figure>
                        </div>
                        <div class="row px-3">
                            <div class="col-4">
                                <figure>
                                    <a href="#"><img src="img/marynarka.jpg"></a>
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure>
                                    <a href="#"><img src="img/marynarka.jpg"></a>
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure>
                                    <a href="#"><img src="img/marynarka.jpg"></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h1>Marynarka</h1>
                        <hr>
                        <div class="details text-left">
                            <p>Kolor: granatowy</p>
                            Rozmiar:
                            <select name="size" id="size">
                            <option value="sizeS">S</option>
                            <option value="sizeM">M</option>
                            <option value="sizeL">L</option>
                            <option value="sizeXL">XL</option>
                            </select>
                            <h1 class="mb-3 text-left">499,99 zł</h1>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg mr-1 mb-2 text-left">Do koszyka</button>
                        <button type="button" class="btn btn-secondary btn-lg mr-1 mb-2 text-left">Kup teraz</button>
                    </div>
                </div>
                <!-- tabela-->
                <div class="col-12">
                            <ul class="nav tabs-primary nav-justified" id="myTab" role="tablist">
                                <li class="nav-item">
                                <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Opis</a>
                                <hr>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#informations" role="tab" aria-controls="information" aria-selected="false">Informacje</a>
                                <hr>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="false">Wysyłka</a>
                                <hr>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="home-tab"> Nesciunt consequuntur possimus dignissimos enim atque dicta excepturi laudantium explicabo sit, reiciendis, quia dolorum obcaecati eum amet asperiores rerum, quibusdam deserunt rem!</div>
                                <div class="tab-pane fade" id="informations" role="tabpanel" aria-labelledby="profile-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt consequuntur possimus dignissimos enim atque dicta excepturi laudantium explicabo sit.</div>
                                <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="contact-tab">Quia dolorum obcaecati obcaecati eum amet asperiores rerum, quibusdam deserunt rem! possimus dignissimos enim atque dicta excepturi laudantium explicabo sit.</div>
                            </div>
                        </div>
                        <!-- tabela-->
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
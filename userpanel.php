<?php
	include("config.php");

	$SESSION = $_SESSION['email'];
	$sql_query = "SELECT * FROM user WHERE email='$SESSION'";
	$result = mysqli_query($link, $sql_query);
	$row = mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="pl">
	<head>
		<?php include 'head.php';?>
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
									<label for="password">Hało:</label>
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
									<label for="zipCode">Kod Pocztowy:</label>
									<input type="text" class="form-control" id="zipCode" value="<?php echo $row['zipCode']; ?>">
								</div>
								<div class="form-group col-6">
									<label for="voivodeship">Województwo:</label>
									<input type="text" class="form-control" id="voivodeship" value="<?php echo $row['voivodeship']; ?>">
								</div>
							</div>
							<div class="form-row float-right pr-3">
								<button type="button" class="btn btn-primary" id="update">Zaktualizuj</button>
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

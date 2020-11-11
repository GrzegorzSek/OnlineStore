<?php

	include("config.php");
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
            <div class="container-fluid pt-1">
                <div class="row pb-1">
                    <div class="col-12 d-inline">
                        <form class="form-inline float-right">
						    <input class="form-control mr-1" type="search" placeholder="szukaj">
						<button class="btn btn-dark" type="submit">znajdź</button>
					</form>
                    </div>
                </div>
                <div class="row pr-1">
                    <div class="col-2 border-left border-right border px-0 bg-light">
                        <div class="list-group">
                            <button type="button" class="list-group-item list-group-item-action active btn-light">Użytkownicy</button>
                            <button type="button" class="list-group-item list-group-item-action btn-light">Zamówienia</button>
                            <button type="button" class="list-group-item list-group-item-action btn-light">Produkty</button>
                        </div>
                    </div>
                    <div class="col-10 border p-0">
                        <table class="table table-hover table-sm">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
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

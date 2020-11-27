<?php
	include("config.php");
?>
<?php
    $query = "SELECT * FROM product LIMIT 6";
    $rows = mysqli_query($link, $query);
        $results = array();
    while ($result =  mysqli_fetch_array($rows)){
        $results[] = $result;
    }
?>
<!doctype html>
<html lang="pl">
	<head>
		<?php include 'head.php';?>
		<script src="register.js"></script>
	</head>
  <body>
		<header>
			<nav class="navbar fixed-top navbar-light bg-light navbar-expand-lg">
				<a class="navbar-brand" href="dashboard.php">LOGO</a>			

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse text-uppercase" id="mainMenu">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="clothes">Ubrania</a>	
							<div class="dropdown-menu">
								<a class="dropdown-item" href="listofproducts.php?category=<?php echo "1" ?>&subcategory=<?php echo "1" ?>" id="trousers">Spodnie</a>
								<a class="dropdown-item" href="listofproducts.php?category=<?php echo "1" ?>&subcategory=<?php echo "2" ?>" id="t-shirts">koszulki</a>
								<a class="dropdown-item" href="listofproducts.php?category=<?php echo "1" ?>&subcategory=<?php echo "3" ?>" id="blouses">bluzy</a>
							</div>					
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Buty</a>	
							<div class="dropdown-menu">
								<a class="dropdown-item" href="listofproducts.php?category=<?php echo "2" ?>&subcategory=<?php echo "4" ?>">botki</a>
								<a class="dropdown-item" href="listofproducts.php?category=<?php echo "2" ?>&subcategory=<?php echo "5" ?>">na obcasie</a>
								<a class="dropdown-item" href="listofproducts.php?category=<?php echo "2" ?>&subcategory=<?php echo "6" ?>">sportowe</a>
							</div>					
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Akcesoria</a>	
							<div class="dropdown-menu">
								<a class="dropdown-item" href="listofproducts.php?category=<?php echo "3" ?>&subcategory=<?php echo "7" ?>">torby</a>
								<a class="dropdown-item" href="listofproducts.php?category=<?php echo "3" ?>&subcategory=<?php echo "8" ?>">plecaki</a>
								<a class="dropdown-item" href="listofproducts.php?category=<?php echo "3" ?>&subcategory=<?php echo "9" ?>">biżuteria</a>
							</div>					
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Kontakt</a>						
						</li>
					</ul>

					<form class="form-inline my-auto mr-auto" onsubmit="window.location='searchpage.php?search=' + search.value; return false;">
						<input class="form-control mr-1" type="search" placeholder="szukaj" id="search" name="search" required>
						<button class="btn btn-secondary" type="submit" value="send" id="searchButton">znajdź</button>
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
					<?php foreach ($results as $result){ ?>			
						<div class="col-sm-6 col-md-4">
							<figure> 
								<a href="productdetails.php?id=<?php echo $result['id']; ?>"><img src="<?php echo $result['image']; ?>" alt="<?php echo $result['name']; ?>"></a>
							</figure>
						</div>
					<?php }?>
				</div>
			</div>
    	</section>
	</main>		
</body>
	<footer class="page-footer pt-4">
		<?php include 'foot.php';?>
	</footer>
</html>

<?php include 'modals/loginform.php';?>
<?php include 'modals/signupform.php';?>
<?php include 'modals/forgottenpassword.php';?>


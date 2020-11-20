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
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="clothes">Ubrania</a>	
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="listofproducts.php?category=<?php echo "1" ?>&subcategory=<?php echo "1" ?>" id="trousers">Spodnie</a>
                    <a class="dropdown-item" href="listofproducts.php?category=<?php echo "2" ?>&subcategory=<?php echo "1" ?>" id="t-shirts">koszulki</a>
                    <a class="dropdown-item" href="listofproducts.php?category=<?php echo "3" ?>&subcategory=<?php echo "1" ?>" id="blouses">bluzy</a>
                </div>					
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Buty</a>	
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="listofproducts.php?category=<?php echo "1" ?>&subcategory=<?php echo "2" ?>">botki</a>
                    <a class="dropdown-item" href="listofproducts.php?category=<?php echo "2" ?>&subcategory=<?php echo "2" ?>">na obcasie</a>
                    <a class="dropdown-item" href="listofproducts.php?category=<?php echo "2" ?>&subcategory=<?php echo "6" ?>">sportowe</a>
                </div>					
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button">Akcesoria</a>	
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="listofproducts.php?category=<?php echo "1" ?>&subcategory=<?php echo "4" ?>">torby</a>
                    <a class="dropdown-item" href="listofproducts.php?category=<?php echo "1" ?>&subcategory=<?php echo "5" ?>">plecaki</a>
                    <a class="dropdown-item" href="listofproducts.php?category=<?php echo "1" ?>&subcategory=<?php echo "6" ?>">biżuteria</a>
                </div>					
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php"> Kontakt</a>						
            </li>
        </ul>

        <form class="form-inline mr-auto">
            <input class="form-control mr-1" type="search" placeholder="szukaj">
            <button class="btn btn-secondary" type="submit">znajdź</button>
        </form>

        <ul class="navbar-nav">
            <li class="nav-item dropdown mr-4">
                <img src="favicons/myAccountIcon.png" type="button" class="dropdown-toggle" data-offset="10,20" data-toggle="dropdown" alt="myAccountIcon">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="userpanel.php">mój profil</a>
                    <a class="dropdown-item" href="userpanel.php">zamówienia</a>
                    <a class="dropdown-item" href="logout.php">wyloguj</a>
                </div>				
            </li>
            <li class="nav-item mr-2">
                <img src="favicons/shoppingCartIcon.png" data-toggle="modal" data-target="#userShoppingCart" alt="shoppingCartIcon" style="cursor: pointer"></a>						
            </li>
        </ul>
    </div>
</nav>
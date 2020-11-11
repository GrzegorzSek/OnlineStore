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
            <li class="nav-item dropdown">
                <img src="favicons/myAccountIcon.png"  class="dropdown-toggle" data-toggle="dropdown" alt="myAccountIcon" style="cursor: pointer">
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="userpanel.php">mój profil</a>
                    <a class="dropdown-item" href="#">zamówienia</a>
                    <a class="dropdown-item" href="logout.php">wyloguj</a>
                </div>				
            </li>
            <li class="nav-item">
                <img src="favicons/shoppingCartIcon.png" data-toggle="modal" data-target="#userShoppingCart" alt="shoppingCartIcon" style="cursor: pointer"></a>						
            </li>
        </ul>
    </div>
</nav>
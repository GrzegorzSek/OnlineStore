<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['userid'])){
    header('Location: index.php');
}

?>
<!doctype html>
<html lang="pl">
<head>
    <?php include 'head.php';?>
</head>
<body>
    <header>
        <?php include "header.php" ?>
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

<?php include 'modals/loginform.php';?>
<?php include 'modals/signupform.php';?>


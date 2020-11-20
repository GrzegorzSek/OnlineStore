<?php include 'config.php';?>
<?php
  $product_id=$_GET["id"];

  $sql = "SELECT * FROM product WHERE id='".$product_id."'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);

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
			<div class="break"></div>
			<div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="col-12">
                            <figure>
                                <a href="#"><img src="<?php echo $row['image']; ?>"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h1><?php echo $row['name']; ?></h1>
                        <hr>
                        <div class="details text-left">
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
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="home-tab"><?php echo $row['description']; ?></div>
                                <div class="tab-pane fade" id="informations" role="tabpanel" aria-labelledby="profile-tab">Quia dolorum obcaecati obcaecati eum amet asperiores rerum, quibusdam deserunt rem! possimus dignissimos enim atque dicta excepturi laudantium explicabo sit.</div>
                                <div class="tab-pane fade" id="shipping" role="tabpanel" aria-labelledby="contact-tab">Quia dolorum obcaecati obcaecati eum amet asperiores rerum, quibusdam deserunt rem! possimus dignissimos enim atque dicta excepturi laudantium explicabo sit.</div>
                            </div>
                        </div>
                            <p>KOLOR</p>
                            <p>Rozmiar: <?php echo $row['size']; ?></p>
                            <h1 class="mb-3 text-center">Cena: <?php echo $row['price']; ?>zł</h1>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg mr-1 mb-2 text-left" id="addToCart">Dodaj koszyka</button>
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

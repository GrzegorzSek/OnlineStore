<?php
include "config.php";

$SESSION=$_SESSION['userid'];
//sprawdza czy użytkownik jest zalogowany, jeśli nie to wraca na stronę index.php
if(!isset($_SESSION['userid'])){
    header('Location: index.php');
}

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


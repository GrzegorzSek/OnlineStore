<?php 
	include 'config.php';
	//sprawdza czy użytkownik jest zalogowany, jeśli nie to wraca na stronę index.php
	$SESSION=$_SESSION['userid'];
	if(!isset($_SESSION['userid'])){
		header('Location: index.php');
	}
?>
<?php
    $search=$_GET["search"];
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
			<div class="break">
			</div>
			<div class="col-lg-12 mb-2">
							<!-- sortowanie -->
				<div class="row">
					<div class="col-xs-6 col-lg-2 offset-lg-5">
						<div class="d-flex flex-wrap">
							<div class="select-outline position-relative w-100">
							<select class="sorting mdb-select md-outline md-form mt-2" id="sorting">
								<option value="" disabled selected>sortuj według</option>
								<option value="price_up">cena w górę</option>
								<option value="price_down">cena w dół</option>
								<option value="a_to_z">A-Z</option>
								<option value="z_to_a">Z-A</option>
							</select>
							</div>
						</div>
					</div>
				</div>
			</div>
					<!--sortowanie-->
			<div class="container">
				<div class="row">
					<div class="col-lg-2 bg-light border pt-2 px-1">
						<!-- <h5>Podkategorie</h5>

						<div class="text-left text-dark small text-uppercase mb-5">
							<p class="mb-4">wróć do <a href="#!" class="card-link-secondary"><strong>ubrania</strong></a></p>

							<p class="mb-3"><a href="#!" class="card-link-secondary link-dark">kat1</a></p>
							<p class="mb-3"><a href="#!" class="card-link-secondary link-dark">kat1</a></p>
							<p class="mb-3"><a href="#!" class="card-link-secondary">kat1</a></p>
							<p class="mb-3"><a href="#!" class="card-link-secondary">kat1</a></p>
							<p class="mb-3"><a href="#!" class="card-link-secondary">kat1</a></p>
							<p class="mb-3"><a href="#!" class="card-link-secondary">kat1</a></p>
						</div> -->
						<h6>Cena</h6>
						<div class="list-group d-flex align-items-center mt-4 pb-1">
							<div class="md-form md-outline my-0">
								<input id="minimum_price" type="text" class="form-control mb-0">
								<label for="minimum_price">zł min</label>
							</div>
							<p class="px-2 mb-0 text-muted"> - </p>
							<div class="md-form md-outline my-0">
								<input id="maximum_price" type="text" class="form-control mb-0">
								<label for="maximum_price">zł max</label>
							</div>
						</div>
						<div class="list-group">
							<h4>Marka</h4>
							<div>
								<?php
									$query = "SELECT DISTINCT(brand) FROM product ORDER BY brand ASC";
									$rows = mysqli_query($link, $query);
										$results = array();
									while ($result =  mysqli_fetch_array($rows)){
										$results[] = $result;
									}
									foreach ($results as $result){
								?>
									<div class="list-group-item checkbox">
										<label><input type="checkbox" class="brand" value="<?php echo $result['brand']; ?>"> <?php echo $result['brand']; ?></label>
									</div>
								<?php
									}
								?>
							</div>
						</div>
						<div class="list-group">
							<h4>Rozmiar</h4>
							<div>
								<?php
									$query = "SELECT DISTINCT(size) FROM product ORDER BY size ASC";
									$rows = mysqli_query($link, $query);
										$results = array();
									while ($result =  mysqli_fetch_array($rows)){
										$results[] = $result;
									}
									foreach ($results as $result){
								?>
									<div class="list-group-item checkbox">
										<label><input type="checkbox" class="size" value="<?php echo $result['size']; ?>"> <?php echo $result['size']; ?></label>
									</div>
								<?php
									}
								?>
							</div>
						</div>
						<div class="filterButton">
							<button type="button" name="filter" class="btn btn-primary my-2 float-right" id="filter">Filtruj</button>
						</div>
					</div>
					<!-- KONIEC SORTOWANIA-->
					<!--TUTAJ PRODUKTY -->				
					<div class="col-lg-10">
						<div class="row filter_data">
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>		
	<script>
			$(document).ready(function(){
				filter_data();

				function filter_data()
				{
					var action = 'fetch_data';
					var minimum_price = $('#minimum_price').val();
					var maximum_price = $('#maximum_price').val();
					var brand = get_filter('brand');
					var size = get_filter('size');
					var option = $( "#sorting" ).val();
					$.ajax({
						url:"scripts/search.php?search=<?php echo $search ?>",
						method:"POST",
						data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, size:size, option:option},
						success:function(data){
							$('.filter_data').html(data);
						}
					});
				}

				function get_filter(class_name)
				{
					var filter = [];
					$('.'+class_name+':checked').each(function(){
						filter.push($(this).val());
					});
					return filter;
				}
				$("#filter").click(function(){
					filter_data();
				});
			});
		</script>
  </body>
	<footer class="page-footer pt-4">
	<?php include 'foot.php';?>
	</footer>
</html>

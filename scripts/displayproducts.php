<?php
include "../config.php";

$category=$_GET["category"];
$subcategory=$_GET["subcategory"];

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM product WHERE category_id='".$category."' AND subcategory_id='".$subcategory."'
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
    }
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND price >= '".$_POST["minimum_price"]."'
		";
    }
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND price <= '".$_POST["maximum_price"]."'
		";
    }
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "
		 AND brand IN('".$brand_filter."')
		";
	}
    if(isset($_POST["size"]))
	{
		$size_filter = implode("','", $_POST["size"]);
		$query .= "
		 AND size IN('".$size_filter."')
		";
    }
    if(isset($_POST["option"]) && $_POST["option"]=='price_up')
	{
		$query .= "ORDER BY price ASC";
    }
    if(isset($_POST["option"]) && $_POST["option"]=='price_down')
	{
		$query .= "ORDER BY price DESC";
    }
    if(isset($_POST["option"]) && $_POST["option"]=='a_to_z')
	{
		$query .= "ORDER BY name ASC";
    }
    if(isset($_POST["option"]) && $_POST["option"]=='z_to_a')
	{
		$query .= "ORDER BY name DESC";
    }
    //$query .= "ORDER BY name ASC";
    //zapisanie wierszy w tablicy
    $rows = mysqli_query($link, $query);
    if (!$rows) {
        printf("Error: %s\n", mysqli_error($link));
        exit();
    }
    $results = array();
    while ($result =  mysqli_fetch_array($rows)){
        $results[] = $result;
    }

    //liczba wierszy
	$rowsNumbersql = "SELECT count(*) as cntProduct FROM product";
    $resultNumber = mysqli_query($link, $rowsNumbersql);
    $row2 = mysqli_fetch_array($resultNumber);
    $total_row = $row2['cntProduct'];

	$output = '';
	if($total_row > 0)
	{
		foreach($results as $result)
		{
			$output .= '
			<div class="col-sm-6 col-md-4 mb-3">
                <a href="productdetails.php?id='.$result['id'].'">
                    <div class="mask">
                        <img class="img-fluid" src="'.$result['image'].'">
                        <div class="mask rgba-black-slight"></div>
                    </div>
                </a>				
                <div class="text-center pt-4">
                    <h5>'.$result['name'].'</h5>
                    <hr>
                    <h6 class="mb-3">'.$result['price'].' zł</h6>
                    <button type="button" class="btn btn-primary btn-sm mr-1 mb-2" data-role="addToCart" data-id="'.$result['id'].'" id="addToCart">Do koszyka</button>
                    <button type="button" class="btn btn-light btn-sm mr-1 mb-2" ><a href="productdetails.php?id='.$result['id'].'">szczegóły</a></button>
                </div>
            </div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>
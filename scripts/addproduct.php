<?php
    include "../config.php";

    $productName=$_POST['productName'];
    $productBrand=$_POST['productBrand'];
    $productCategory=$_POST['productCategory'];
    $productSubcategory=$_POST['productSubcategory'];
    $productSize=$_POST['productSize'];
    $productColour=$_POST['productColour'];
    $productPrice=$_POST['productPrice'];
    $productDescription=$_POST['productDescription'];
    $productQuantity=$_POST['productQuantity'];
	
	if (!empty($_FILES['image']['name'])) {

		$fileName = $_FILES['image']['name'];
		
		$fileExt = explode('.', $fileName); //rozdziela nazwę na [nazwa] i [jpg]
		$fileActExt = strtolower(end($fileExt)); //end przenosi na koniec tablicy, natomiast strtolower zmienia znaki na lowercase
		$allowImg = array('png','jpeg','jpg');
        $filePathToSave = 'img/'.$fileName; 
        $filePath = '../img/'.$fileName; 

		if (in_array($fileActExt, $allowImg)) { //Sprawdza czy plik posiada odpowiednie rozszerzenie
		    if ($_FILES['image']['size'] > 0  && $_FILES['image']['error']==0) {  
			    if (move_uploaded_file($_FILES['image']['tmp_name'], $filePath)) {
		    	    echo 'zdjęcie zostało dodane';
			    }else{
			        echo "Zdjęcie nie zostało dodane, spróbuj jeszcze raz!";
			    }	
		    }else{
		    	echo "Problem z wysłaniem pliku!";
		    }
		}else{	
		    echo "Ten typ pliku jest niedozwolony!";
		}
	}

    $sql = "INSERT INTO product(`name`, `brand`, `category_id`, `subcategory_id`, `size`, `colour`, `price`, `description`, `quantity`, `image`) VALUES('$productName', '$productBrand', '$productCategory', '$productSubcategory', '$productSize', '$productColour', '$productPrice', '$productDescription','$productQuantity', '$filePathToSave')";
    mysqli_query($link, $sql);

    mysqli_close($link);

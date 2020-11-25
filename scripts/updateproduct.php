<?php
    include "../config.php";

    $productID=$_POST['productID'];
    $productName=$_POST['productName'];
    $productBrand=$_POST['productBrand'];
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
        
        $sql = "UPDATE product SET name='$productName', price='$productPrice', colour='$productColour', description='$productDescription', brand='$productBrand', size='$productSize', image='$filePathToSave' WHERE id='$productID'";
        if (!mysqli_query($link, $sql)) {
            printf("Error: %s\n", mysqli_error($link));
            exit();
        }
	}else{
        $sql = "UPDATE product SET name='$productName', price='$productPrice', colour='$productColour', description='$productDescription', brand='$productBrand', size='$productSize' WHERE id='$productID'";
        //mysqli_query($link, $sql);
        if (!mysqli_query($link, $sql)) {
            printf("Error: %s\n", mysqli_error($link));
            exit();
        }
    }
    echo $productID;
    echo $productName;
    echo $productBrand;
    echo $productSize;
    echo $productColour;
    echo $productPrice;
    echo $productDescription;
    echo $productQuantity;

    mysqli_close($link);

<?php
    include "config.php";

    $email = mysqli_real_escape_string($link,$_POST['email']);
    $password = mysqli_real_escape_string($link,$_POST['password']);
 


    if ($email != "" && $password != ""){

        $sql_query = "SELECT count(*) as cntUser FROM user WHERE email='".$email."' and password='".$password."'";
        $result = mysqli_query($link,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['email'] = $email;
            echo 1;
        }else{
            echo 0;
        }
    }

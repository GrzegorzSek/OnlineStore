<?php
    include "../config.php";

    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
 


    if ($email != "" && $password != ""){


        //counting found rows
        $sql_query = "SELECT count(*) as cntUser FROM user WHERE email='".$email."' and password='".$password."'";
        $result = mysqli_query($link, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];


        //get user id
        $sql_query_id = "SELECT * FROM user WHERE email='".$email."' and password='".$password."'";
        $result_id = mysqli_query($link, $sql_query_id);
        $row_id = mysqli_fetch_array($result_id);

        if($count > 0){
            $_SESSION['email'] = $email;
            $_SESSION['userid']= $row_id["id"];
            echo 1;
        }else{
            echo 0;
        }
    }
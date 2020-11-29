<?php
    include "../config.php";

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    //echo $password.'<br>';

    if ($email != "" && $password != ""){


        //counting found rows
        $sql_query = "SELECT count(*) as cntUser FROM user WHERE `email`='".$email."' and `password`='".$password."'";
        $result = mysqli_query($link, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        //get user id
        $sql_query_id = "SELECT * FROM user WHERE `email`='".$email."' and `password`='".$password."'";
        $result_id = mysqli_query($link, $sql_query_id);
        $row_id = mysqli_fetch_array($result_id);

        if($count > 0){
            $_SESSION['email'] = $email;
            $_SESSION['userid']= $row_id["id"];

            $SESSION=$_SESSION['userid'];
            $sql = "SELECT * FROM cart WHERE client_id='$SESSION'";
            $result = mysqli_query($link, $sql);
            if(mysqli_num_rows($result) <= 0){
                $sql = "INSERT INTO cart(client_id) VALUES('$SESSION')";
                mysqli_query($link, $sql);
            }
            echo 1;
        }else{
            echo 0;
        }
    }

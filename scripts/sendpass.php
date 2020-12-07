<?php
    include "../config.php";

    $email = mysqli_real_escape_string($link, $_POST['email']); //pobranie z formularza

    $sql_query_id = "SELECT * FROM user WHERE email='".$email."'";
    $result_id = mysqli_query($link, $sql_query_id);
    $row_id = mysqli_fetch_array($result_id);
    $password = md5($row_id['password']);

    $subject="Przypomnienie hasla ze strony OnlineStore";
    $mailHeaders = "Przypomnienie hasla";
    $message = "Twoje haslo: ".$password;
    if(mail($email, $subject, $message, $mailHeaders)) {
        echo json_encode(array("statusCode"=>200));
    } else {
        echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($link);

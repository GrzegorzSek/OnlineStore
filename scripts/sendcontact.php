<?php
    $toEmail = "onlinestorexampp@gmail.com";
    $mailHeaders = "From: " . $_POST["usernameContact"] . "<". $_POST["emailContact"] .">\r\n";
    if(mail($toEmail, $_POST["subjectContact"], $_POST["messageContact"], $mailHeaders)) {
        echo "1";
    } else {
        echo "0";
    }
    mysqli_close($link);

<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "onlineshop";

    $link = mysqli_connect($host, $user, $pass) or die("Connection error");
    mysqli_select_db($link,$dbname) or die("Database error");
?>

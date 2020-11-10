<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

?>
<!doctype html>
<html>
    <head>
    <title>Login page with jQuery and AJAX</title>
    </head>
    <body>
        <h1>Homepage</h1>
        <br>
        <a href="logout.php">Logout</a>
    </body>
</html>
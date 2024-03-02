<?php
session_start();
if((!isset($_SESSION['Email']) && !isset($_SESSION['password']) )){
    session_abort();
    header('location:./login.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include("./assets/part/header.php")?>
        <?php 
            if($_SESSION['Email'] == "admin@admin") {
                include('./assets/part/dashboard_admin.php');           
            }
        ?>
    </body>
</html>
<?php
session_start();
if((!isset($_SESSION['Email']))){
    session_abort();
    header('location:../login.php');
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
    
    </body>
</html>
<?php
session_start();
include('./conn_db.php');

if (isset($_SESSION['email']) && isset($_SESSION['password'])) 
    header("Location: ../../Profile.php");

$email = mysqli_real_escape_string($conn,htmlspecialchars($_POST['email']));
$motDePasse = mysqli_real_escape_string($conn,htmlspecialchars($_POST['motDePasse']));
if($motDePasse != "" && $email != "") {
    $motDePasse = sha1($motDePasse);
    $query = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE `email`='{$email}' AND `motDePasse`='{$motDePasse}' ");
            if (mysqli_num_rows($query) == 1) {
                $_SESSION['Email'] = $email;
                $_SESSION['password']= $motDePasse;
                header('location: ../../Profile.php');
            } else {
                header('location: ../../login.php?code=5'); // Mot de passe ou email incorrect
            }
}
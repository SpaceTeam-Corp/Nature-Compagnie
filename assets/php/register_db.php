<?php
session_start();
include('./conn_db.php');

if (isset($_SESSION['email']) && isset($_SESSION['password'])) 
    header("Location: ../../Profile.php");

$nom = mysqli_real_escape_string($conn,htmlspecialchars($_POST['nom']));
$prenom = mysqli_real_escape_string($conn,htmlspecialchars($_POST['prenom']));
$email = mysqli_real_escape_string($conn,htmlspecialchars($_POST['email']));
$motDePasse = mysqli_real_escape_string($conn,htmlspecialchars($_POST['motDePasse']));
$ConfirmMotDePasse = mysqli_real_escape_string($conn,htmlspecialchars($_POST['ConfirmMotDePasse']));
// $adresse = $_POST['adresse'];
// $codePostal = $_POST['codePostal'];
// $ville = $_POST['ville'];
// $pays = $_POST['pays'];
// $telephone = $_POST['telephone'];
$dateInscription = date('Y-m-d');

if ($prenom != "" && $nom != "" && $motDePasse != "" && $ConfirmMotDePasse != "" && $email != "") {
        if($motDePasse === $ConfirmMotDePasse){
            $query = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE `email`='{$email}'");
            if (mysqli_num_rows($query) == 0) {
                $motDePasse = sha1($motDePasse);
                mysqli_query($conn, "INSERT INTO `utilisateurs`(`nom`, `prenom`, `email`, `motDePasse`, `dateInscription`) VALUES ('{$nom}','{$prenom}','{$email}','{$motDePasse}','{$dateInscription}');");
                echo"oui";
                $query = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE `email`='{$email}'");
                if (mysqli_num_rows($query) == 1) {
                    $_SESSION['Prenom'] = $prenom;
                    $_SESSION['Nom'] = $nom;
                    $_SESSION['Email'] = $email;
                    $_SESSION['password']= $motDePasse;
                    header('location: ../../Profile.php?code=200');
                }else{
                    header('location: ../../register.php?code=1');
                }
            }else{
                header('location: ../../register.php?code=2');//Compte existe deja
            }
        } else{
            echo("non");
            header('location: ../../register.php?code=3');// Mot de passe ne corresponde pas
        }
} else {
    echo"<script>alert</script>";
}

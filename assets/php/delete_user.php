<?php
session_start();

if(isset($_GET['id']) && !empty($_GET['id']) && $_SESSION['Email'] == "admin@admin"){
    $id = $_GET['id'];

    include('./conn_db.php');


    $sql = "DELETE FROM utilisateurs WHERE idUtilisateur=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Suppression effectuée avec succès.";
        header('location: ../../Profile.php');
    } else {
        echo "Erreur lors de la suppression : " . $conn->error;
    }

    $conn->close();
} else {
    echo "ID de l'utilisateur non spécifié.";
}
?>
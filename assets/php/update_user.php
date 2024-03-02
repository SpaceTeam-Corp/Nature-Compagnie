<?php
session_start();
if(isset($_GET['id']) && !empty($_GET['id'] && $_SESSION['Email'] == "admin@admin")){
    $id = $_GET['id'];

    if(isset($_POST['submit'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $adresse = $_POST['adresse'];
        $codePostal = $_POST['codePostal'];
        $ville = $_POST['ville'];
        $pays = $_POST['pays'];
        $telephone = $_POST['telephone'];

        include('./conn_db.php');


        $sql = "UPDATE utilisateurs SET nom='$nom', prenom='$prenom', email='$email', adresse='$adresse', codePostal='$codePostal', ville='$ville', pays='$pays', telephone='$telephone' WHERE idUtilisateur=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Mise à jour effectuée avec succès.";
            header('location: ../../Profile.php');
        } else {
            echo "Erreur lors de la mise à jour : " . $conn->error;
        }

        $conn->close();
    }

    include('./conn_db.php');

    $sql = "SELECT * FROM utilisateurs WHERE idUtilisateur=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
?>
        <form method="post">
            Nom: <input type="text" name="nom" value="<?php echo $row['nom']; ?>"><br>
            Prénom: <input type="text" name="prenom" value="<?php echo $row['prenom']; ?>"><br>
            Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
            Adresse: <input type="text" name="adresse" value="<?php echo $row['adresse']; ?>"><br>
            Code Postal: <input type="text" name="codePostal" value="<?php echo $row['codePostal']; ?>"><br>
            Ville: <input type="text" name="ville" value="<?php echo $row['ville']; ?>"><br>
            Pays: <input type="text" name="pays" value="<?php echo $row['pays']; ?>"><br>
            Téléphone: <input type="text" name="telephone" value="<?php echo $row['telephone']; ?>"><br>
            <input type="submit" name="submit" value="Mettre à jour">
        </form>
        <a href="../../Profile.php">RETOUR</a>
<?php
    } else {
        echo "Utilisateur non trouvé.";
    }
} else {
    echo "ID de l'utilisateur non spécifié.";
}
?>

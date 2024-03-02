<?php include('./assets/php/conn_db.php');

function afficherUtilisateurs($conn) {
    $sql = "SELECT * FROM utilisateurs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Adresse</th><th>Code Postal</th><th>Ville</th><th>Pays</th><th>Téléphone</th><th>Date d'Inscription</th><th>Actions</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['idUtilisateur']."</td>";
            echo "<td>".$row['nom']."</td>";
            echo "<td>".$row['prenom']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['adresse']."</td>";
            echo "<td>".$row['codePostal']."</td>";
            echo "<td>".$row['ville']."</td>";
            echo "<td>".$row['pays']."</td>";
            echo "<td>".$row['telephone']."</td>";
            echo "<td>".$row['dateInscription']."</td>";
            echo "<td><a href='./assets/php/update_user.php?id=".$row['idUtilisateur']."'>Modifier</a> | <a href='./assets/php/delete_user.php?id=".$row['idUtilisateur']."'>Supprimer</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aucun utilisateur trouvé.";
    }
}

?>

<div class="main" id="results-container">

    <div class="box" id="users">
        <h1>Utilisateurs</h1>
        <?php afficherUtilisateurs($conn); ?>
        
    </div>

    <div class="box" id='stock'>
        <h1>Stock</h1>
        <p>LOREM IPSUM</p>
    </div>

</div>
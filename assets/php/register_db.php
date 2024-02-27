<?php
// Connexion à la base de données
$dsn = 'mysql:host=nom_du_serveur;dbname=nom_de_la_base_de_donnees';
$username = 'utilisateur';
$password = 'mot_de_passe';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    exit();
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$motDePasse = $_POST['motDePasse'];
$adresse = $_POST['adresse'];
$codePostal = $_POST['codePostal'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$telephone = $_POST['telephone'];
$dateInscription = date('Y-m-d');

// Requête d'insertion préparée
$query = "INSERT INTO Utilisateurs (nom, prenom, email, motDePasse, adresse, codePostal, ville, pays, telephone, dateInscription) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $db->prepare($query);
$stmt->execute([$nom, $prenom, $email, $motDePasse, $adresse, $codePostal, $ville, $pays, $telephone, $dateInscription]);

if ($stmt) {
    echo "Données insérées avec succès";
} else {
    echo "Erreur lors de l'insertion des données";
}
?>
<?php
if (isset($_SESSION['email']) && isset($_SESSION['password'])) 
    header("Location: ../../Profile.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Inscription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./assets/css/style.css" rel="stylesheet">
    </head>
    <body style="background:wheat;">

    <?php include('./assets/part/header.php')?>

    <div class="content" style="height: fit-content;">

        <div class="form_login">
            <form class="form" action="./assets/php/register_db.php" method="post">
                <p class="title">Inscription </p>
                <p class="message">Inscrivez-vous pour obtenir un accés complet au site. </p>
                    <div class="flex">
                    <label>
                        <input required="" placeholder="Prénom" type="text" class="input" name="prenom">
                    </label>

                    <label>
                        <input required="" placeholder="Nom" type="text" class="input" name="nom">
                    </label>
                </div>  
                        
                <label>
                    <input style="width:500px;text-align:center;" required="" placeholder="Email" type="email" class="input" name="email">
                </label> 
                    
                <label>
                    <input style="width:500px;text-align:center;" required="" placeholder="Mot de Passe" type="password" class="input" name="motDePasse">
                </label>
                <label>
                    <span></span>
                    <input style="width:500px;text-align:center;" required="" placeholder="Confirmer Mot de Passe" type="password" class="input" name="ConfirmMotDePasse">
                </label>

                <?php
                
                if(isset($_GET['code'])){
                    if($_GET['code']== 3){
                        echo("<p style='color:red;margin:0;font-weight:bold;'>Les mot de passe ne correspondent pas </p>");
                    }
                    if($_GET['code']== 2){
                        echo("<p style='color:red;margin:0;font-weight:bold;'>Une compte existe deja avec cet email -> <a href='./login.php'>Connexion</a></p>");
                    }
                    if($_GET['code']== 1){
                        echo("<p style='color:red;margin:0;font-weight:bold;'>Erreur lors de la création du compte</p>");
                    }

                    
                }

                ?>

                <button class="boutonlog">S'inscrire</button>
                <p class="signin">Deja inscrit ? -> <a href="./login.php">Connexion</a></p>
            </form>
        </div>

    </div>
    
    <?php include('./assets/part/footer.php') ?>
    </body>
</html>
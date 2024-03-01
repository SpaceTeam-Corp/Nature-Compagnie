<?php
if (isset($_SESSION['Email']) && isset($_SESSION['password'])) 
    header("Location: ../../Profile.php");
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Connexion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./assets/css/style.css" rel="stylesheet">
    </head>
    <body style="background:wheat;">

    <?php include('./assets/part/header.php')?>

    <div class="content" style="height: fit-content;">

        <div class="form_login">
            <form class="form" action="./assets/php/login_db.php" method="Post">
                <p class="title">Connexion</p>
                <label>
                    <input style="width:500px;text-align:center;" required="" placeholder="Email" type="email" name="email" class="input">
                </label> 
                    
                <label>
                    <input style="width:500px;text-align:center;" required="" placeholder="Mot de Passe" type="password" name="motDePasse" class="input">
                </label>

                <button class="boutonlog">Envoyer</button>

                <?php
                
                if(isset($_GET['code'])){
                    if($_GET['code']== 5){
                        echo("<p style='color:red;margin:0;font-weight:bold;'>Mot de passe ou Email incorrect </p>");
                    }
                }

                ?>

                <p class="signin">Toujours pas de compte -> <a href="./register.php">S'inscrire</a> </p>
            </form>
        </div>

    </div>
    
    <?php include('./assets/part/footer.php') ?>
    </body>
</html>
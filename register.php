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
            <form class="form">
                <p class="title">Inscription </p>
                <p class="message">Inscrivez-vous pour obtenir un accés complet au site. </p>
                    <div class="flex">
                    <label>
                        <input required="" placeholder="Prénom" type="text" class="input">
                    </label>

                    <label>
                        <input required="" placeholder="Nom" type="text" class="input">
                    </label>
                </div>  
                        
                <label>
                    <input style="width:500px;text-align:center;" required="" placeholder="Email" type="email" class="input">
                </label> 
                    
                <label>
                    <input style="width:500px;text-align:center;" required="" placeholder="Mot de Passe" type="password" class="input">
                </label>
                <label>
                    <span></span>
                    <input style="width:500px;text-align:center;" required="" placeholder="Confirmer Mot de Passe" type="password" class="input">
                </label>
                <button class="boutonlog">S'inscrire</button>
                <p class="signin">Deja inscrit ? -> <a href="./login.php">Connexion</a></p>
            </form>
        </div>

    </div>
    
    <?php include('./assets/part/footer.php') ?>
    </body>
</html>
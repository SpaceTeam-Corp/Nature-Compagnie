<head>
    <script src="https://kit.fontawesome.com/9e5fc47a4e.js" crossorigin="anonymous"></script>
</head>
<header>
        <img src="./logo.jpg" id="logo" height="100px">
        <a href="./index.php"><h1>Nature & Compagnie</h1></a>

        <!-- <ul>
            <li><a href="#">Faune</a></li>
            <li><a href="#">Flore</a></li>
        </ul> -->
        
        <form onsubmit="event.preventDefault(); search();">
            <input type="text" id="search-input" placeholder="Rechercher...">
            <button type="submit">Rechercher</button>
        </form>

        <?php 
        if(isset($_SESSION['Email'])){
            echo("<div class='login'>
            <a href='./Profile.php'><i class='fa-solid fa-user'></i></a>
            <p style='padding:0;color:blue'>".$_SESSION['Email']."</p>
            <p><a href='./assets/php/logout.php'>Déconnexion</a></p></div>");//LOGGED
        } else {
            echo("<div class='login'>
            <a href='./register.php'><i class='fa-solid fa-user'></i></a>
            <p><a href='./login.php'>Connexion </a> / <a href='./register.php'> Inscription</a></p></div>");//NOT LOGGED
        }
        ?>
        <!-- <div class="login">
            <a href="./register.php"><i class="fa-solid fa-user"></i></a>
            <p><a href="./login.php">Connexion </a> / <a href="./register.php"> Inscription</a></p>
        </div> -->

        <div class="cart">
            <i class="fa-solid fa-cart-shopping" onclick=""></i>
        </div>
</header>
<?php      
session_start();  
//session_destroy sert à detruire la session  
session_destroy();  
echo" Vous êtes  déconnecté";
header("location: ../../Profile.php?logout=1");
   

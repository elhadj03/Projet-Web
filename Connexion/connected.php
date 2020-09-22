<?php

  session_start();

   $ok = $_SESSION["connexion"];
   $utilisateur1=$_SESSION["utilisateur"];

  if ($ok) {
    echo 'Vous êtes connecté !',$utilisateur1 ;
    echo '<br><a href="deconnexion.php">se déconnecter</a>';
   } else {
    echo 'Vous n\'êtes pas connecté.<br><a href="connexion.php">essayer à nouveau</a>';
}
?>
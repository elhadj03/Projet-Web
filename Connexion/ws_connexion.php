<?php
session_start();

  $utilisateur = $_REQUEST["utilisateur"];
  $pwd = $_REQUEST["pwd"];

  $comptes = json_decode(file_get_contents("./comptesUtilisateur.json"), true);

  $trouve = false;
   foreach ($comptes as $c) {
    if ($c["utilisateur"] == $utilisateur && $c["pwd"] == $pwd) {
        $trouve = true;
    }
  }

  $_SESSION["connexion"] = $trouve;
  $_SESSION["utilisateur"] = $utilisateur ;

  header("Location: connected.php");

?>

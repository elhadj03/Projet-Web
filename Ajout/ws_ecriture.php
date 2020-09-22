<?php
 include "./bdd.php";


$nouvelle = [
  "titre" => $_REQUEST["titre"],
  "type" => $_REQUEST["type"],
  "categorie" => $_REQUEST["categorie"],
  "temps_preparation" => $_REQUEST["temps_preparation"],
  "nb_personnes" => $_REQUEST["nb_personnes"],
  "auteur" => $_REQUEST["auteur"],
  "email" => $_REQUEST["email"],
  "recette" => $_REQUEST["recette"],
  "photo" => $_REQUEST["photo"],
  "date" => $_REQUEST["date"]
  ];

     add_recettes($nouvelle);
    http_response_code(201); //created
  

?>
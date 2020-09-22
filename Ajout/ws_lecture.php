<?php

include "./bdd.php";
$messages = get_recettes_json();
http_response_code(200); // "OK"

// on renvoie les données au format JSON
echo $messages;

?>
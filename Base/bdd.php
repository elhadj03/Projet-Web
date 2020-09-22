<?php

    //Creation de la fonction get_recettes lisant les données depuis le fichier JSON
    function get_recettes_json(){
    
    // Verification de l'existence du fichier JSON
        $nouveau_fichier = "./data.json";
            //Recuperation du fichier JSON
            $contenu_fichier_json =file_get_contents($nouveau_fichier);
            //Conversion des chaines encodées en JSON en variable php
    
           // $valeurs_tableau = json_decode ($contenu_fichier_json, true);

            return $contenu_fichier_json;
    
    }
    function get_recettes(){
        $donnees_json = get_recettes_json();
        $donnees_decode = json_decode ($donnees_json, true);
        return $donnees_decode;
    }

        //Ajouter des données au fichier json
        function add_recettes($valeurs_tableau){
            $recette_1 = get_recettes();
            array_push( $recette_1, $valeurs_tableau);

        // On réencode en JSON
        $contenu_json = json_encode($recette_1);
        $nouveau_fichier = "./data.json";
        // On stocke tout le JSON
        file_put_contents($nouveau_fichier, $contenu_json);
    }
?>
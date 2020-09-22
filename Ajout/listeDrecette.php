<!DOCTYPE html>

<html>

           <!--HEAD-->   
    <head>
        <meta charset="utf-8">
        <title>site de cuisine</title> 
          <!--CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <link rel="stylesheet" href="src/css/main.css">
          <!--CSS -->

          <!--FONT -->
          <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet"> 
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
          <!--FONT -->
         
           <!--script -->
          <script src="listeDrecette.js"> </script>

           <!--script -->

   </head>

             <!--HEAD-->


          <!--BODY-->

    <body>
   <!-- bouton afficher les données-->
        
    <form id= "form-message">
        <input type="texte"  name= "champ" id="champ_texte" placeholder = "Tartes aux Oignons"/>

    </form>
 
        <input type="button" id="affiche_donnees" value="afficher_les_données">

        <div id="afficher_les_donnees">
        </div>
         <div class="container-fluid" id="ajout-recette">
         <p><h1>Ajouter une recette</h1></p>
         <form action="listeDrecette.php" id="ajouter_recette" method="POST">
         <p>titre</p> <input type="text" name="titre" id="titre" required>
         <p>type</p> <input type="text" name="type" id="type" required>
          <p>catégorie</p> <input type="text" name="categorie" id="categorie" required>
         <p>temps de préparation</p> <input type="text" name="temps_preparation" id="temps_preparation" required>
         <p>nombre de personne</p> <input type="text" name="nb_personnes" id="nb_personnes" required>
         <p>auteur</p> <input type="text" name="auteur" id="auteur" required>
         <p>email</p> <input type="email" name="email" id="email" required>
         <p>ingrédients</p> <input type="text" name="recette" id="recette" required>
         <p>image</p> <input type="url" id="image" name="photo" accept="image/png, image/jpeg" required>
         <p>date d'ajout</p> <input type="date" name="date" id="date" required>
        <p></p> <input type="submit" name="submit" value="valider"  id="submit" required>
         </form>
         </div>


    

               <!--jS -->
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script> src="src/js/main.js"</script>
              <!--JS -->
    </body>
           <!--BODY-->

</html>
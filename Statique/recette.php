<?php
include ('bdd.php');
$lister = get_recettes();


 
    foreach ($lister as $lis) {?>
       
    
        <h1>TITRE DE LA RECETTE: <?php echo $lis["titre"];?></h1> 
        <div class="type"> 
            <p>Cette recette est un (e) : 
                <strong><?php echo $lis["type"]; ?></strong>
            </p>
        </div>
        <div class="origine"> 
            <p>Elle est d'origine : 
                <em><?php echo $lis["categorie"]; ?>
                </em>
        </div>
        <div class="auteur"> 
            <p>Elle a été préparée par : 
                <em><?php echo $lis["auteur"]; ?>
                </em>: Vous pouvez la joindre sur <strong><?php echo $lis["email"]; ?></strong>
            </p>
        </div>
        <div class = "temps"> 
            <p> La recette nécessite :
               <em><?php echo $lis["temps_preparation"]; ?></em>mn de préparation. 
               Elle est pour <strong><?php echo $lis["nb_personnes"]; ?></strong> personnes.
            </p>
        </div>
        <div class= "date">
        <p>Elle a été ajoutée le : 
                <strong><?php echo $lis["date"]; ?>
                </strong>
            </p>
        </div>
        <div class= "recette">
        <p>Pour bien préparer la recette : <br /> 
                <strong><?php echo $lis["recette"]; ?>
                </strong>
            </p>
        </div>
        <div class="image"> 
            <img src= "<?php echo $lis["photo"];  ?>" alt="Photo" />
        </div>

       
    
    
        <?php
        }

?>

window.addEventListener("DOMContentLoaded", function() {
 
 function lectureRecette() {
        var requete = new XMLHttpRequest();
		// on détermine ce qui doit se passer quand on recevra la réponse du service
		requete.addEventListener("load", function(event) {
			// on décode le format JSON pour obtenir un objet Javascript
            var messages = JSON.parse(event.target.responseText);
            var listeMess = document.getElementById("afficher_les_donnees");
            listeMess.innerHTML = "";
            for (var i = 0; i < messages.length; i++) {
                // ajouter les autres variable du tableau sous forme de div comme dans listeSrecette.php
                listeMess.innerHTML += "<li>" + messages[i].titre + " - " + messages[i].type +  " - " + messages[i].categorie + " - " + messages[i].temps_preparation +" - " + messages[i].nb_personnes +" - " + messages[i].auteur + " - " + messages[i].email +" - " + messages[i].recette +" - " + messages[i].date + "<img src="+messages[i].photo+"> </li>";
            }
		});
		// on envoie la requête à l'URL du webservice
		requete.open("GET", "ws_lecture.php");
		requete.send();
    }

        var leBouton = document.querySelector("#affiche_donnees");
        leBouton.addEventListener("click", (evt) => {
            evt.preventDefault();
            lectureRecette();
        });
       
    

        var formulaire=document.getElementById("ajouter_recette");
         formulaire.addEventListener("submit", function(event){
         event.preventDefault();
         var requete= new XMLHttpRequest();
          var data= new FormData(formulaire);
        requete.open("POST", "ws_ecriture.php");
        requete.send(data);
        
         
        });

        
 
   
});

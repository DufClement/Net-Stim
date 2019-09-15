$(document).ready(function() 
    { 
      AfficheArtiste(); // La fonction sera lancée dès le chargement du DOM
    } 
); 

function AfficheArtiste() { // Récupère les données du fichier AJAX puis les renvoie sur la page index

	$.ajax({
    url: "RefArtisteAffiche.ajax.php",
    success: function(rep){
      document.getElementById('tableArtiste').innerHTML = rep;

    }
});
	
}

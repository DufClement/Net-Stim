<?php

include('connection_bdd.php');
require 'classes/Artiste.class.php';
require 'classes/ArtisteManager.class.php';

$managerArtiste = new ArtisteManager($pdo); // Création d'un objet ArtisteManager


?>
	<table id="tab_Artiste" class="alt">
		<thead><tr>
		<th>Nom</th>
		<th>Prénom</th>
		<th>Age</th>
		</tr></thead>
		
<?php
	$artistes = $managerArtiste->getList(); // Récupère la liste des artistes 
	foreach ($artistes as $un_artiste) { // Traite les données pour les afficher dans le tableau html ci-dessus
	   $javascript = ' onclick="window.location=\'RefArtisteDetails.php?id='.$un_artiste->getid().'\'" title="Modifier" onmouseover="this.style.cursor=\'pointer\'"';
	   echo '<tr><td '.$javascript.'>'.$un_artiste->getNom().'</td>';  
		echo '<td '.$javascript.'>'.$un_artiste->getPrenom().'</td>';
		echo '<td '.$javascript.'>'.$un_artiste->getAge().'</td>';
	   echo '</tr>';
	}
	echo '</table>';
?>

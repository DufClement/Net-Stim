<?php
include('connection_bdd.php');
require 'classes/Artiste.class.php';
require 'classes/ArtisteManager.class.php';

$managerArtiste = new ArtisteManager($pdo); // Création d'un objet ArtisteManager

	$artiste = new Artiste(array(	'id'=>(int)$_POST['id'], 
										'Nom'=>trim($_POST['Nom']),
										'Prenom'=>trim($_POST['Prenom']),
										'Age'=>trim($_POST['Age']),		// On envoie le nouvel objet Artiste
										'Groupe'=>trim($_POST['Groupe']),
										'Agence'=>trim($_POST['Agence'])
								  ));
	$managerArtiste->update($artiste); // Update dans la bdd
	
exit('OK');
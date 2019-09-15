<?php 
include('connection_bdd.php');
require 'classes/Artiste.class.php';
require 'classes/ArtisteManager.class.php';
$idArtiste = $_GET['id']; // Récupère l'id de l'artiste
$managerArtiste = new ArtisteManager($pdo); // Création d'un objet ArtisteManager
$artisteDetail = $managerArtiste->getDetail($idArtiste);
include('html_header.html');
?>


				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Détail de l'artiste : <?php echo $artisteDetail->getNom().' '.$artisteDetail->getPrenom();?></h1>
									</header>
									<ul class="alt">
										<li>Nom : <?php echo $artisteDetail->getNom();?></li>
										<li>Prenom : <?php echo $artisteDetail->getPrenom();?></li>
										<li>Age : <?php echo $artisteDetail->getAge();?></li>
										<li>Groupe : <?php echo $artisteDetail->getGroupe();?></li>
										<li>Agence : <?php echo $artisteDetail->getAgence();?></li>
									</ul>
									<!-- Renvoie vers la page de modif avec en paramètre l'id de l'artiste --> 
									<a href="RefArtisteModif.php?id=<?php echo $idArtiste;?>" class="button primary small">Modifier</a> 
								</div>
							</section>

					</div>
<?php include('html_footer.html');
?>
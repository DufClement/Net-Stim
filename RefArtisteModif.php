<?php 
include('connection_bdd.php');
require 'classes/Artiste.class.php';
require 'classes/ArtisteManager.class.php';
$idArtiste = $_GET['id']; // Récupère l'id de l'artiste
$managerArtiste = new ArtisteManager($pdo); // Création d'un objet ArtisteManager
$artisteDetail = $managerArtiste->getDetail($idArtiste); // Récupère le détail de l'artiste
include('html_header.html');
?>


				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Modification de l'artiste : <?php echo $artisteDetail->getNom().' '.$artisteDetail->getPrenom();?></h1>
									</header>
									<div id="ZoneAlerte">
										<!-- Affichage du message retour jQuery -->
									</div>
									<form method="post">
										<input id="Hid" type="hidden" value="<?php echo $idArtiste;?>"/> <!-- id de l'artiste -->
										<ul class="alt">
											<li>Nom : <input type="text" id="TbNom" value="<?php echo $artisteDetail->getNom();?>" placeholder="Nom" /></li>
											<li>Prénom : <input type="text" id="TbPrenom" value="<?php echo $artisteDetail->getPrenom();?>" placeholder="Prénom" /></li>
											<li>Age : <input type="text" id="TbAge" value="<?php echo $artisteDetail->getAge();?>" placeholder="Age" /></li>
											<li>Groupe : <input type="text" id="TbGroupe" value="<?php echo $artisteDetail->getGroupe();?>" placeholder="Groupe" /></li>
											<li>Agence : <input type="text" id="TbAgence" value="<?php echo $artisteDetail->getAgence();?>" placeholder="Agence" /></li>
										</ul>
										<input type="submit" id="submit" value="Valider" />
									</form>
								</div>
							</section>
					</div>
<?php include('html_footer.html');
?>
<?php
$serveur = '127.0.0.1';
$login = 'root';
$mot_de_passe = 'root';
$base_de_donnees = 'artiste';
try { $pdo = new PDO('mysql:host='.$serveur.';dbname='.$base_de_donnees, $login, $mot_de_passe); }
catch (PDOException $e) { die("Connextion impossible". $e->getMessage()); }
?>
<?php

class ArtisteManager {
   private $_db;
   
   public function __construct($db) {
      $this->setDb($db);
   }
   
   public function setDb(PDO $d) {
      $this->_db = $d;
   }
   
   public function getList() { // retourne la liste de tous les artistes
		$artistes = array();
		$query = 'SELECT *
				FROM artiste;';
		$result = $this->_db->query($query);
		while($donnees = $result->fetch(PDO::FETCH_ASSOC)) { $artistes[] = new Artiste($donnees);}
		return $artistes;
   }

   public function getDetail($i) { // retourne le détail d'un artiste
      	$query = 'SELECT * FROM artiste WHERE id='.$i;
         $result = $this->_db->query($query);
         $donnees = $result->fetch(PDO::FETCH_ASSOC);
         return new Artiste($donnees);
   }
		
	public function update($p) {
		$req = 'UPDATE artiste SET Nom= :n, Prenom= :p, Age= :a, Groupe= :g, Agence= :ag WHERE id= :i';
		$sql = $this->_db->prepare($req);
		$sql->bindValue(':i', $p->getid() , PDO::PARAM_INT);
		$sql->bindValue(':n', $p->getNom(), PDO::PARAM_STR);
		$sql->bindValue(':p', $p->getPrenom(), PDO::PARAM_STR);
		$sql->bindValue(':a', $p->getAge(), PDO::PARAM_STR);
		$sql->bindValue(':g', $p->getGroupe(), PDO::PARAM_STR);
		$sql->bindValue(':ag', $p->getAgence(), PDO::PARAM_STR);
		$sql->execute();	
	}   
}
?>
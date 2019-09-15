<?php

class Artiste {
   private  $_id,
		$_Nom,
		$_Prenom,
		$_Age,
		$_Groupe,
      $_Agence;
			
   public function __construct(array $donnees) {
      $this->hydrate($donnees);
   }

   public function hydrate(array $donnees) {
      foreach ($donnees as $k=>$v) {
         $method = 'set'.$k;
         if (method_exists($this, $method)) { $this->$method($v); }
      }
   }
   
   public function getid() {
      return $this->_id;
   }
      
   public function setid($i) {
      $i= (int) $i;
      if ($i > 0) { $this->_id = $i; }
   }
	
  public function getNom() {
      return $this->_Nom;
   }
      
   public function setNom($n) {
      if (is_string($n)) { $this->_Nom = trim($n); }
   }
   
    public function getPrenom() {
		return $this->_Prenom;
   }

	public function setPrenom($p) {
	if (is_string($p)) { $this->_Prenom = trim($p); }
   }

   public function getAge() {
      return $this->_Age;
   }
      
   public function setAge($a) {
      $a= (int) $a;
      if ($a > 0) { $this->_Age = $a; }
   }

   public function getGroupe() {
      return $this->_Groupe;
   }

   public function setGroupe($g) {
   if (is_string($g)) { $this->_Groupe = trim($g); }
   } 

   public function getAgence() {
      return $this->_Agence;
   }

   public function setAgence($a) {
   if (is_string($a)) { $this->_Agence = trim($a); }
   } 
}
?>
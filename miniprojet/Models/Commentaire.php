<?php

class Commentaire{
  
    private $iduser;
    private $idpub;
    private $contenucommentaire;

    public function __construct($contenucommentaire,$idpub,$iduser)
    {
      $this->contenucommentaire = $contenucommentaire; 
      $this->idpub= $idpub; 
      $this->iduser = $iduser; 
       
    }

    public function setContenucommentaire($contenucommentaire){$this->contenucommentaire = $contenucommentaire;}
    public function setIdpub($idpub){$this->idpub = $idpub;}
    public function setIduser($iduser){$this->iduser = $iduser;}

    public function getContenucommentaire(){return $this->contenucommentaire;}
    public function getIdpub(){return $this->idpub;}
    public function getIduser(){return $this->iduser;}

}
?>
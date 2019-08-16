<?php

class pubindex{
  
    private $titre;
    private $contenu;

    public function __construct($titre, $contenu,$iduser,$idcommunaute)
    {
      $this->titre = $titre; 
      $this->contenu = $contenu; 
      $this->iduser = $iduser; 
      $this->idcommunaute = $idcommunaute; 
       
    }

    public function setTitre($titre){$this->titre = $titre;}
    public function setContenu($contenu){$this->contenu = $contenu;}
    public function setIduser($iduser){$this->iduser = $iduser;}
    public function setIdcommunaute($iduser){$this->idcomunaute = $idcommunaute;}

    public function getTitre(){return $this->titre;}
    public function getContenu(){return $this->contenu;}
    public function getIduser(){return $this->iduser;}
    public function getIdcommunaute(){return $this->idcommunaute;}

}
?>
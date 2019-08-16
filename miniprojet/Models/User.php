<?php

class User{
  
    private $login;
    private $pwd;
     private $communaute;

    public function __construct($login, $pwd, $communaute)
    {
      $this->login = $login; 
      $this->pwd = $pwd; 
      $this->communaute= $communaute; 
       
    }

    public function setLogin($login){$this->login = $login;}
    public function setPwd($pwd){$this->pwd = $pwd;}
    public function setCommunaute($communaute){$this->communaute = $communaute;}

    public function getLogin(){return $this->login;}
    public function getPwd(){return $this->pwd;}
    public function getCommunaute(){return $this->communaute;}

}
?>
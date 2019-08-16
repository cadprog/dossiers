<?php

include "../Models/database.php";
include "../Models/User.php";
 
 $db = new Database();

if (isset($_POST['ok'])){

	//recuperation des données
	$login = $_POST['login'];
	$pwd = $_POST['motdepasse'];

			$sql = $db->getDB()->prepare('SELECT * FROM users');
			$sql->execute();

			$data = $sql->fetchAll(PDO::FETCH_OBJ);

   	      for ($i=0; $i <count($data); $i++) { 
                        if ($data[$i]->login == $login && $data[$i]->pwd == $pwd) {
                            $communaute = $data[$i]->idcommunaute;
                        }
                                    
            }
        

$user = new User($login,$pwd,$communaute);
	//ajout avec connexion à la base inclu
	$db->verifieruser($user);
}



?>
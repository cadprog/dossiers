<?php

include "../Models/database.php";
include "../Models/Publication.php";
 
 $db = new Database();
 if (isset($_GET["iduser"])) {
    
                             $id=(string)$_GET["iduser"];
                             }

if (isset($_POST['publier'])){

	//recuperation des données
	$login_user = $_POST['login_user'];
	$titre = $_POST['titre'];
	$poste = $_POST['poste'];
	$communaute = $_POST['communaute'];

$pubindex = new pubindex($titre,$poste,$login_user,$communaute);
	//ajout avec connexion à la base inclu
	$db->addpub($pubindex);
	header("location:../Views/listpubs.php?com=$communaute & id=$login_user");
}



?>
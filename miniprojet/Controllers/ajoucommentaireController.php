<?php

include "../Models/database.php";
include "../Models/Commentaire.php";
 
 $db = new Database();
if (isset($_POST['publier'])){

	//recuperation des données
	$contenucomment = $_POST['contenu_commentaire'];
	$login_user = $_POST['login_user'];
	$id_pub = $_POST['id_pub'];

$comment = new Commentaire($contenucomment,$id_pub,$login_user);
	//ajout avec connexion à la base inclu
	$db->addcomment($comment);
	header("location:../Views/listcommentaires.php?idpub=$id_pub & id=$login_user");
}



?>
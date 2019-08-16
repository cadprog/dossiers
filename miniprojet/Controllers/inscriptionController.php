<?php

include "../Models/database.php";
include "../Models/User.php";
 
 $db = new Database();
if (isset($_POST['envoyer'])){

	//recuperation des données
	$login = $_POST['login'];
	$pwd = $_POST['motdepasse'];
	$communaute = $_POST['communaute'];

    if ($communaute!='0') {
    	 $user = new User($login,$pwd,$communaute);
	//ajout avec connexion à la base inclu
	$db->adduser($user);
	header("location:../index.php");
    }
    else
      
       echo "<marquee style='color: red'>le choix de la communauté est impératif!!!</marquee>
              <a href='../index.php'>RETOUR</a>

   ";
}



?>
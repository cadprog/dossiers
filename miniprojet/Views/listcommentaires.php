<?php
 include 'template/header.php';
include "../Models/database.php";
include "../Models/Ajoutcommentaire.php";

 $commentcreate = new Commentcreate();
 $db = new Database();
$comments = $db->getAllcomment();
//$comments= $db->trie($allcomments);
?>
<body>

    <!--link rel="stylesheet" href="assets/css/style.css"-->
    <title>Liste Commentaires</title>

<div class="breadcrumbs">
 <marquee behavior="" direction=""><u><mark style="font-size: 28px">Commentaires!!!!</mark></u></marquee>
</div>

 <div class="content mt-3">
<div class="col-md-5 col-md-offset-3 card" style="margin-left: 250px">
<!--MILIEU-->
     <form action="../Controllers/commentaireController.php" method="post" enctype="multipart/form-data" class="form-horizontal">
          <?php

                      if (isset($_GET["idu"])) {
    
                             $idu=(string)$_GET["idu"];
                             
                             if (isset($_GET["idpubl"])) {
    
                             $idpubl=(string)$_GET["idpubl"];

                            foreach ($comments as $comment) {

                     	echo"<table class='table'>
                              <thead class='thead-dark'>
                                <tr>
                                  <th scope='col'>";
                                  $sql = $db->getDB()->prepare("SELECT * FROM users");
                            $sql->execute();

                            $data = $sql->fetchAll(PDO::FETCH_OBJ);

                            for ($i=0; $i <count($data); $i++) { 
                                 if ($data[$i]->iduser == $comment->iduser+1) { 
                                   echo $data[$i]->login.' a commenté: &nbsp;&nbsp;';
                                 }              
                              }
                        echo      "</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope='row'>";
                                //  var_dump($comment->iduser);
                                 // if ($comment->iduser==$idu ) {
                                       echo" $comment->contenucommentaire";
                                  //}
                                 
                                  
                        echo "</th>
                                  
                                </tr>
                                <tr>
                                  <th scope='row'>
                                    <a href='listreponses.php' title='liste des reponses' style='margin-left:150px;'>Répondre<i class='fa fa-reply'></i> </a>
                                  </th>
                                </tr>
                              </tbody>
                            </table><hr>";
                         
                          }
                             
                       }
                     }

                     $commentcreate->textarea("contenu_commentaire");

                         if (isset($_GET["idu"])) {
    
                             $iduser=(string)$_GET["idu"];
                             echo "<label>login_user</label><br>";
                             echo "<input type='text' name='login_user' value='$iduser' class='form-control' required><br><br>";
  
                          }
                          
                            if (isset($_GET["idpubl"])) {
    
                             $idpub=(string)$_GET["idpubl"];
                             echo "<label>publication</label><br>";
                             echo "<input type='text' name='id_pub' value='$idpub' class='form-control' required><br><br>";
                           }
                             
                              $commentcreate->submit();
                            $commentcreate->reset();

                          
          
	    	   ?>
	    </form>
</div>

 <?php include "template/footer.php";?>
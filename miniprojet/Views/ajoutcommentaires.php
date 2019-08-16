<?php
 include 'template/header.php';
include "../Models/database.php";
include "../Models/Ajoutcommentaire.php";

 $commentcreate = new Commentcreate();
 $db = new Database();
//$comments = $db->getAllcomment();
//$comments= $db->trie($allcomments);
?>
<body>

    <!--link rel="stylesheet" href="assets/css/style.css"-->
    <title>Liste Commentaires</title>

<div class="breadcrumbs">
 <marquee behavior="" direction=""><u><mark style="font-size: 28px">Ajout de Commentaires!!!!</mark></u></marquee>
</div>

 <div class="content mt-3">
<div class="col-md-5 col-md-offset-3 card" style="margin-left: 250px">
<!--MILIEU-->
     <form action="../Controllers/commentaireController.php" method="post" enctype="multipart/form-data" class="form-horizontal">
          <?php

                     $commentcreate->textarea("contenu_commentaire");

                         if (isset($_GET["id"])) {
    
                             $iduser=(string)$_GET["id"];
                             echo "<label>login_user</label><br>";
                             echo "<input type='text' name='login_user' value='$iduser' class='form-control' required><br><br>";
  
                          }
                          
                            if (isset($_GET["idpub"])) {
    
                             $idpub=(string)$_GET["idpub"];
                             echo "<label>publication</label><br>";
                             echo "<input type='text' name='id_pub' value='$idpub' class='form-control' required><br><br>";
                           }
                             
                              $commentcreate->submit();
                            $commentcreate->reset();

                          
          
           ?>
      </form>
</div>

 <?php include "template/footer.php";?>
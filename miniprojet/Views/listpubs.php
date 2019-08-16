
<?php
 include 'template/header.php';
include "../Models/database.php";
 $db = new Database();
$allpubs = $db->getAllpub();
$pubs= $db->trie($allpubs);
?>
<body>

    <!--link rel="stylesheet" href="assets/css/style.css"-->
    <title>Liste pub</title>

<div class="breadcrumbs">
 <marquee behavior="" direction=""><u><mark style="font-size: 28px">Liste des Publications!!!!</mark></u></marquee>
</div>

 <div class="content mt-3">
	<div class="col-md-5 col-md-offset-3 card" style="margin-left: 250px">
		<br>
         <?php
              /*if (isset($_GET["id"])) {
    
                             $iduser=(string)$_GET["id"];
                         }*/
             if (isset($_GET["com"])) {
    
                             $com=(string)$_GET["com"];
                            
               
                   foreach ($pubs as $pub) {
                     echo "<div class='card'>";
                        echo" <div class='card-header'>";
                                  
                            $sql = $db->getDB()->prepare("SELECT * FROM users WHERE users.idcommunaute='$com'");
                            $sql->execute();

                            $data = $sql->fetchAll(PDO::FETCH_OBJ);

                            for ($i=0; $i <count($data); $i++) { 
                                 if ($data[$i]->iduser == $pub->iduser) {
                                              //$iduser=$data[$i]->iduser;
                                   echo "<strong class='card-title mb-3'>";
                                   echo $data[$i]->login.'</strong> a publié: &nbsp;&nbsp;'.$pub->titre;
                                               
                                          
                        echo" </div>
                            <div class='card-body'>";
                                   if (strlen($pub->contenu)>50) {
                                       echo"<div class='mx-auto d-block'>";
                                          echo'<p>'.substr($pub->contenu,0,50).'</p>';
                                       echo"</div><hr>
                                            <div class='card-text text-sm-center'>
                                                 <a href='pubvue.php?c=$pub->contenu & t=$pub->titre & i=$pub->iduser' class='btn btn-primary' title='Voir plus'><i class='fa fa-plus-square-o'></i></a>";
                                 
                                                 if (isset($_GET["id"])) {
                                                   $id=(string)$_GET["id"];
                                                    echo "<a href='listcommentaires.php?idpubl=$pub->idpub & idu=$id' class='btn btn-warning'   title='liste des commentaires'><i class='fa fa-comments'></i></a>";
                                                  }

                                                    echo" <a href='listreponses.php?c=$pub->contenu & t=$pub->titre & i=$pub->iduser' class='btn btn-info' title='liste des reponses'><i class='fa fa-reply'></i> </a>
                                           </div>";
                            
                                   }
                                  else
                                   {
                                     echo "<div class='mx-auto d-block'>
                                              <p>$pub->contenu</p>
                                           </div><hr>
                                          <div class='card-text text-sm-center'>";
                                               if (isset($_GET["id"])) {
                                                   $id=(string)$_GET["id"];
                                                   echo "<a href='listcommentaires.php?idpubl=$pub->idpub & idu=$id' class='btn btn-warning' title='liste des commentaires'><i class='fa fa-comments'></i></a>";
                                                }

                                                   echo " <a href='listreponses.php?c=$pub->contenu & t=$pub->titre & i=$pub->iduser' class='btn btn-info' title='liste des reponses'><i class='fa fa-reply'></i> </a>
                                          </div>";
                                    }
                            
                        echo "</div>  
                        </div>
                        <hr>
                        <br>";
                    }
                   }
                                       
                 }
                 
                   if (isset($_GET["id"])) {
    
                             $id=(string)$_GET["id"];
                  
                    echo "<div class='col-md-3'>
                          <a href='ajoutpubs.php?com=$com & iduser=$id' class='btn btn-primary'>Ajouter pub</a>
                         </div>";

                     }
            }
            
          ?>              
     </div>
<?php include "template/footer.php";?>
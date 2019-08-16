
<?php
 include 'template/header.php';
include "../Models/database.php";
 $db = new Database();
$allpubs = $db->getAllpub();
$pubs= $db->trie($allpubs);
?>


<body>
     <!--link rel="stylesheet" href="assets/scss/style.css"-->
<title>Publication</title>

<div class="breadcrumbs">
<marquee behavior="" direction=""><u><mark style="font-size: 28px">Voici la publication toute entière!!!!</mark></u></marquee></div>

 <div class="content mt-3">

 
	<div class="col-md-5 col-md-offset-3 card" style="margin-left: 250px">
		<br>
        <div class='card'>
                    
                    <div class='card-header'>
                        <strong class='card-title mb-3'>
                           <?php 
                            if (isset($_GET["i"])) {
                                  $sql = $db->getDB()->prepare('SELECT * FROM users');
                                   $sql->execute();

                                     $data = $sql->fetchAll(PDO::FETCH_OBJ);

                                     for ($i=0; $i <count($data); $i++) { 
                                         if ($data[$i]->iduser == $_GET["i"]) {
                                             
                                             echo $data[$i]->login;
                                           }
                                       
                                      }
                           
                               
                            }
                         ?>
                        </strong>
                          a publié: &nbsp;&nbsp;
                         <?php 
                            if (isset($_GET["t"])) {
                                echo $_GET["t"];
                            }
                         ?>
                                               
                                        
                    </div>

<?php

  if (isset($_GET["c"])) {
      
             echo" <div class='card-body'>
                                <div class='mx-auto d-block'>
                                    <p>".$_GET["c"]."</p>
                                </div>
                                <hr>
                                <div class='card-text text-sm-center'>
                                    
                                    <a  href='#' onclick='history.go(-1);' class='btn btn-primary'>Retour</a>
                                </div>
                            </div>";
      
  }

?>
        </div>

	</div>
<?php include "template/footer.php";?>
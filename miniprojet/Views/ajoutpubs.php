<?php

include "../Models/Ajoutpub.php";
 include 'template/header.php';
 $pubcreate = new pubcreate();

?>

<title>Ajout pub</title>

<div class="breadcrumbs">
 <marquee behavior="" direction=""><u><mark style="font-size: 28px">Vous pouvez ajouter votre publication!!!</mark></u></marquee> </div>

        <div class="content mt-3">
		<div class="col-md-4 col-md-offset-4 card" style="margin-left: 250px">
			<br>
                    <div class="card">
                      <div class="card-header">
                        <strong>Ajout publication</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="../Controllers/ajoutpubsController.php" method="post" enctype="multipart/form-data" class="form-horizontal">
				   
				    	<?php

                          $pubcreate->input("titre");
                          $pubcreate->textarea("poste");

                         if (isset($_GET["iduser"])) {
    
                             $iduser=(string)$_GET["iduser"];
                             echo "<label>login_user</label><br>";
                             echo "<input type='text' name='login_user' value='$iduser' class='form-control' required><br><br>";
  
                          }
                          
                            if (isset($_GET["com"])) {
    
                             $com=(string)$_GET["com"];
                             echo "<label>Communauté</label><br>";
                             echo "<input type='text' name='communaute' value='$com' class='form-control' required><br><br>";
                           }
                             
                              $pubcreate->submit();
                            $pubcreate->reset();

          
				    	?>
              
				  </form>
				</div>
			</div>
		</div>
<?php include "template/footer.php";?>




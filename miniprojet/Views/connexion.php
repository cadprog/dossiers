  <?php

include "../Models/Connexion.php";
 $connexion = new Connexion();

 include "../Models/Inscription.php";
 $inscription = new Inscription();

?>

  <!DOCTYPE > 
<html> 
<head>  
  <title>SENschOol</title> 
</head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<meta name="description" content=""> 
<meta name="author" content=""> 
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> 
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'> 
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'> 
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'> 
<link rel="stylesheet" type="text/css" href="frontend/connexion/connexion.css"> 
<body style="background-color:#4E638E"> 


 <div class="btn btn-outline-warning" style="margin-right: 200px;margin-top: 20px;float: right;">
 	<a href="index.php" style="font-weight: bold;color: white;">Home</a>
 </div>
<main class="py-4">
	 
  <div class="container">
  	<div class="row justify-content-center" style="padding-top: 60px;padding-bottom: 40px;">
    <div class="col-lg-4 col-md-4 col-md-4 text-center">

  <div class="card" style="  background: rgba(75, 75, 75, 0.5); color: white;">
    <div class="card-body" id="login"> 
      <i class="fas fa-user-lock avatar fa-5x"></i><br>
      <form method="POST" action="../Controllers/connexionController.php" aria-label="Login">
      	 <input type="hidden" name="_token" value="hEV5BV2hV6r0qpLNHuV6xMaGh73WS1DuLYqrFblT">
      	 <?php

                          $connexion->input1("login");
                          $connexion->input2("motdepasse");
                          $connexion->submit();
                           // $inscription->reset();
              ?>
       
       
      </form>
    </div>
    <div class="card-body" id="register"> 

  <i class="fas fa-user-lock avatar fa-5x"></i><br>  

      <form method="POST"  id="sign_up"  action="../Controllers/inscriptionController.php">
      	 <input type="hidden" name="_token" value="hEV5BV2hV6r0qpLNHuV6xMaGh73WS1DuLYqrFblT">
      	<?php

                   /*       $inscription->input3("login");
                          $inscription->input4("motdepasse");
                          $inscription->liste2("communaute");
                           $inscription->submit2();
                           // $inscription->reset();*/
              ?>
       
        <p>Login</p> 
        <input id="login" type="text" class="form-control" name="login" value="" required placeholder="Entrer un login">
        <p>Mot de passe</p> 
        <input id="password" type="password" class="form-control" name="motdepasse" required placeholder="Entrer un mot de passe"><br>
        <input  type="password"  name="password_confirmation" class="form-control" required placeholder="Confirmer le mot de passe"><br>
        <select name="communaute"  data-live-search="true" class="form-control" >
          <option value='0'>Choisissez une communauté</option>
           <option value='1'>mathematiques</option>
           <option value='2'>physique</option>
           <option value='3'>chimie</option>
           <option value='4'>svt</option>
           
        </select>
        <br>
        <input type="submit" class="btn btn-primary btn-block"  name='envoyer' value="Inscription"><br> 
        <a href="#"  id="loginbtn"style="color:#E5C626;">Se connecter</a> 
      </form> 

    </div>

  </div>
  </div>
  </div>
  </div>
  
 </main>

<script 
src="https://code.jquery.com/jquery-3.3.1.min.js" 
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" 
crossorigin="anonymous"></script> 
<script > 
  $(function(){ 
    $('#register').hide(); 
    $('#registerbtn').click(function(){ 
      $('#login').hide(); 
      $('#register').show(); 
    });  
    $('#loginbtn').click(function(){ 
      $('#register').hide(); 
      $('#login').show(); 
    }); 

  }); 
</script>   
</body>
</html>

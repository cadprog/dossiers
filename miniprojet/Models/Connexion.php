<?php
/**
 * 
 */
class Connexion
{
  
   private $champs;

   public function input1($champs){
              
    echo"<div class='form-group'>
          <label>Login</label>
          <input id= '$champs' type='text' class='form-control' name='$champs' value='' required placeholder='Entrer un login'>
         </div>";

   }

   public function input2($champs){
                            
     echo"<div class='form-group'>
          <label>Mot de passe</label>
          <input id= '$champs' type='text' class='form-control' name='$champs' value='' required placeholder='Entrer un mot de passe'>
         </div>";


   }


   public function submit(){
       echo   " <button type='submit' name='ok' class='btn btn-primary btn-block'>Connexion</button>
        <a class='btn btn-link' href='#' style='color:#E5C626;'>
          Mot de passe oublié?
        </a><br>
        <a href='#' class='btn btn-link' id='registerbtn' style='color:#E5C626;'>S'inscrire</a>"; 
    
     //echo"<button type='submit' name='ok' class='btn btn-success'>Se connecter</button>&nbsp;&nbsp;";
     
   }

    public function reset(){
      echo"<button type='reset' name='annuler' class='btn btn-danger'>Annuler</button><br><br>";
      echo"

                            <a class='btn btn-primary' href='index.php' role='button'>Accueil</a>
                        ";
   }



}

?>
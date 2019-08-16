<?php
/**
 * 
 */
class Connexion
{
  
   private $champs;

   public function input1($champs){
                            
    echo "<div class='form-group'>";
    echo "<label>$champs</label><br>";
    echo "<input type='text' name='$champs' placeholder='$champs' class='form-control' required><br><br>";
    echo "</div>";

   }

   public function input2(){
                            
    echo "<div class='checkbox'>";
    echo "<label><input type='checkbox'> Me le rappeler</label><br>";
    echo "<label class='pull-right '>
                                <a href='#'>mot de passe oublié?</a>
                            </label>";
    echo "</div>";

   }


   public function submit(){
     echo"<button type='submit' name='ok' class='btn btn-success'>Se connecter</button>&nbsp;&nbsp;";
     
   }

    public function reset(){
      echo"<button type='reset' name='annuler' class='btn btn-danger'>Annuler</button><br><br>";
      echo"

                            <a class='btn btn-primary' href='index.php' role='button'>Accueil</a>
                        ";
   }



}

?>
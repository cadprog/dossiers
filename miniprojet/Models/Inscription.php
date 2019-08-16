<?php
/**
 * 
 */
class Inscription
{
	
	 private $champs;

   public function input1($champs){
     
   /*echo "<div class='form-group'>
            <label>$champs</label><br>";
   	echo "<input type='text' name='$champs' placeholder='$champs' class='form-control'required>
      </div>
      ";*/
     echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 form-row'>
            <input type='text' name='$champs' placeholder='$champs' class='form-control normal'>
          </div>";

   }

   public function input2($champs){
     
   /*echo "<div class='form-group'>
            <label>$champs</label><br>";
    echo "<input type='text' name='$champs' placeholder='$champs' class='form-control'required>
      </div>
      ";*/
     echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 form-row'>
            <input type='password' name='$champs' placeholder='$champs' class='form-control normal'>
            
          </div>";
   }

  public function input3($champs){
              
    echo"
         <p>Login</p> 
        <input id='$champs' type='text' class='form-control' name='$champs' required placeholder='Entrer un login'>";

   }

   public function input4($champs){
                            
     echo
         "<p>Mot de passe</p> 
        <input id='$champs' type='password' class='form-control' name='$champs' required placeholder='Entrer un mot de passe'><br>
        <input  type='password'  name='password_confirmation' class='form-control' required placeholder='Confirmer le mot de passe'><br>";

   }

  
  public function liste2($champs){
        echo "
          </div>
        <select name='$champs'  data-live-search='true' class='form-control' >
           <option value='0'>Choisissez une communauté</option>
           <option value='mathematiques'>mathematiques</option>
           <option value='physique'>physique</option>
           <option value='chimie'>chimie</option>
           <option value='svt'>svt</option>
           
        </select>
        <br>";
   
   }

    public function liste($champs){

     /*echo "<br><div class='row form-group'>
                            <div class='col col-md-3'><label for='select' class=' form-control-label'>$champs</label></div>
                            <div class='col-12 col-md-9'>
                              <select name='$champs' id='$champs' class='form-control'>
                                <option value='0'>Choisissez une communauté svp!</option>
                                <option value='mathematiques'>mathematiques</option>
                                <option value='physique'>physique</option>
                                <option value='chimie'>chimie</option>
                                <option value='svt'>svt</option>
                              </select>
                            </div>
                          </div>";*/
        echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 form-row'>
            <select name='$champs' id='$champs' class='form-control normal'>
                                <option value='0'>Choisissez une communauté svp!</option>
                                <option value='1'>mathematiques</option>
                                <option value='2'>physique</option>
                                <option value='3'>chimie</option>
                                <option value='4'>svt</option>
            </select>
          </div>";
   
   }

   public function submit(){
     echo"<button type='submit' name='envoyer' class='btn btn-primary '>Envoyer</button>&nbsp;&nbsp;";
          /*<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <input type="button" class="button" value="Request Information">
          </div>*/
   }

   public function submit2(){
     echo"<br>
        <input type='submit' class='btn btn-primary btn-block' value='Inscription'><br> 
        <a href='connexion.php'  id='loginbtn'style='color:#E5C626;'>Se connecter</a> ";
         
   }

    public function reset(){
   	  echo"<button type='reset' name='annuler' class='btn btn-danger'>Annuler</button>";
   }

}

?>
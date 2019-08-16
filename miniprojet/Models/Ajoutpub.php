<?php
/**
 * 
 */
class pubcreate
{
	
	 private $champs;

   public function input($champs){

   echo "<label>$champs</label><br>";
   	echo "<input type='text' name='$champs' placeholder='titre de la pub' class='form-control' required><br><br>";
   }

   public function textarea($champs){

   echo "<label>$champs</label><br>";
   	echo"<textarea name='$champs' placeholder='Contenu de la publication' class='form-control'required></textarea><br><br>";
   }

   public function submit(){
     echo"<button type='submit' name='publier' class='btn btn-success'>publier</button>&nbsp;&nbsp;";
   }

    public function reset(){
   	  echo"<button type='reset' name='annuler' class='btn btn-danger'>Annuler</button>";
   }

}

?>
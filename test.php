<?php
  $message = "":
  if(isset($_POST['valider'])){
    $message = "Nom du fichier: ".$_FILES["monfichier"]["name"];
    header("location : site.php?msg=True")
  }
 ?>

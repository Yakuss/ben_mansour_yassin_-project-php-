<?php
require_once('../models/Matiere.php');
require_once('../controller/MatCtrl.php');


if(isset($_GET['code'])){
   
   $codemat=$_GET['code'];
   $matCR= new MatController();
   $matCR->supprimerMatiere($codemat);
   
   header('Location: liste_matieres.php');
   exit();

}
?>

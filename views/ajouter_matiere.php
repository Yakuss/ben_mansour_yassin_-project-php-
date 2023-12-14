<?php
require_once('../models/Matiere.php');
require_once('../controller/MatCtrl.php');


$codematiere = $_POST['codematiere'];
$nommatiere = $_POST['nommatiere'];
$nbreheurecourspersemaine = $_POST['nbreheurecourspersemaine'];
$nbreheuretdpersemaine = $_POST['nbreheuretdpersemaine'];
$nbreheuretppersemaine = $_POST['nbreheuretppersemaine'];


$matiere = new C_Matiere($codematiere, $nommatiere, $nbreheurecourspersemaine, $nbreheuretdpersemaine, $nbreheuretppersemaine);
$MatCR=new MatController();

$MatCR->ajouterMatiere($matiere);
header('Location: liste_matieres.php');
exit;
?>
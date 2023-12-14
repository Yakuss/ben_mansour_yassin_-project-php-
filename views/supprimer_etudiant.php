<?php

require_once('../models/Etudiant.php');
require_once('../controller/EtuCtrl.php');


if (isset($_GET['code'])) {

    $codeEtudiant = $_GET['code'];

    $etuCR=new EtudController();
    $etuCR->supprimerEtudiant($codeEtudiant);


    header('Location: liste_etudiant.php');
    exit;
}
?>

<?php
require_once('../models/Etudiant.php');
require_once('../controller/EtuCtrl.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $etudiant = new C_Etudiant($_POST['codeetudiant'], $_POST['nom'], $_POST['prenom'], $_POST['datenaissance'], $_POST['codeclasse'], $_POST['niminscription'], $_POST['adresse'], $_POST['mail'], $_POST['tel']);
    $EtudCR=new EtudController();
    $EtudCR->ajouterEtudiant($etudiant);

    header('Location: liste_etudiant.php');
    exit();
}
?>
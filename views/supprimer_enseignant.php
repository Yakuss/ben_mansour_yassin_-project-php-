<?php
	require_once('../models/Enseignant.php');
	require_once('../controller/EnsCtrl.php');

if(isset($_GET['code'])) {
    $code = $_GET['code'];
    $ensCR=new EnsController();
    $ensCR->supprimerEnseignant($code);
}

header("Location: liste_enseignant.php");
exit();
?>

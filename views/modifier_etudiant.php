<?php

require_once('../models/Etudiant.php');
require_once('../controller/EtuCtrl.php');

$EtuCR= new EtudController();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $codeEtudiant = $_POST['codeetudiant'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateNaissance = $_POST['datenaissance'];
    $codeClasse = $_POST['codeclasse'];
    $niminscription = $_POST['niminscription'];
    $adresse = $_POST['adresse'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];


    $etudiant = new C_Etudiant($codeEtudiant, $nom, $prenom, $dateNaissance, $codeClasse, $niminscription, $adresse, $mail, $tel);


    $EtuCR->modifierEtudiant($etudiant);

 
    header('Location: liste_etudiant.php?code=' . $codeEtudiant);
    exit;
}


if (isset($_GET['code'])) {
    $codeEtudiant = $_GET['code'];
	$row=$EtuCR->getEtudiantByCode($codeEtudiant);

}
?>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Modifier un étudiant</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Modifier un étudiant</h1>
		<form method="POST" action="modifier_etudiant.php">
			<input type="hidden" name="codeetudiant" value="<?php echo $row['codeetudiant']; ?>">
			<div class="form-group">
				<label for="nom">Nom :</label>
				<input type="text" class="form-control" name="nom" id="nom" value="<?php echo $row['nom']; ?>">
			</div>
			<div class="form-group">
				<label for="prenom">Prénom :</label>
				<input type="text" class="form-control" name="prenom" id="prenom" value="<?php echo $row['prenom']; ?>">
			</div>
			<div class="form-group">
				<label for="datenaissance">Date de naissance :</label>
				<input type="date" class="form-control" name="datenaissance" id="datenaissance" value="<?php echo $row['datenaissance']; ?>">
			</div>
			<div class="form-group">
				<label for="codeclasse">Code classe :</label>
				<input type="text" class="form-control" name="codeclasse" id="codeclasse" value="<?php echo $row['codeclasse']; ?>">
			</div>
			<div class="form-group">
				<label for="niminscription">N° inscription :</label>
				<input type="text" class="form-control" name="niminscription" id="niminscription" value="<?php echo $row['niminscription']; ?>">
			</div>
			<div class="form-group">
				<label for="adresse">Adresse :</label>
				<input type="text" class="form-control" name="adresse" id="adresse" value="<?php echo $row['adresse']; ?>">
			</div>
			<div class="form-group">
				<label for="mail">E-mail :</label>
				<input type="email" class="form-control" name="mail" id="mail" value="<?php echo $row['mail']; ?>">
			</div>
			<div class="form-group">
				<label for="tel">Téléphone :</label>
				<input type="tel" class="form-control" name="tel" id="tel" value="<?php echo $row['tel']; ?>">
			</div>
			<button type="submit" class="btn btn-primary">Enregistrer</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
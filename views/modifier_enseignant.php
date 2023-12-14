<?php

require_once('../models/Enseignant.php');
require_once('../controller/EnsCtrl.php');

$EnsCR= new EnsController();

$row=$EnsCR->getEnseignant($_GET['code']);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $enseignant = new C_Enseignant($_GET['code'], $_POST['nom'], $_POST['prenom'], $_POST['daterecrutement'], $_POST['adresse'], $_POST['mail'], $_POST['tel'], $_POST['codedepartement'], $_POST['codegrade']);
    $EnsCR->modifierEnseignant($enseignant); 

    header("Location: liste_enseignant.php?code=" . $enseignant->getCodeEnseignant());
    exit();
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Modifier l'enseignant</title>
	<!-- Ajout de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Modifier l'enseignant</h1>

		<form method="post" action="">
			<div class="form-group">
				<label for="nom">Nom:</label>
				<input type="text" id="nom" name="nom" class="form-control" value="<?php echo  $row['nom']; ?>">
			</div>
			<div class="form-group">
				<label for="prenom">Prénom:</label>
				<input type="text" id="prenom" name="prenom" class="form-control" value="<?php echo  $row['prenom']; ?>">
			</div>
			<div class="form-group">
				<label for="daterecrutement">Date de recrutement:</label>
				<input type="date" id="daterecrutement" name="daterecrutement" class="form-control" value="<?php echo $row['daterecrutement']; ?>">
			</div>
			<div class="form-group">
				<label for="adresse">Adresse:</label>
				<input type="text" id="adresse" name="adresse" class="form-control" value="<?php echo $row['adresse']; ?>">
			</div>
			<div class="form-group">
				<label for="mail">Adresse e-mail:</label>
				<input type="email" id="mail" name="mail" class="form-control" value="<?php echo $row['mail']; ?>">
			</div>
			<div class="form-group">
				<label for="tel">Numéro de téléphone:</label>
				<input type="tel" id="tel" name="tel" class="form-control" value="<?php echo $row['tel']; ?>">
			</div>
			<div class="form-group">
				<label for="codedepartement">Code département:</label>
				<input type="text" id="codedepartement" name="codedepartement" class="form-control" value="<?php echo $row['codedepartement']; ?>">
			</div>
			<div class="form-group">
				<label for="codegrade">Code grade:</label>
				<input type="text" id="codegrade" name="codegrade" class="form-control" value="<?php echo $row['codegrade']; ?>">
			</div>
			<input type="submit" value="Enregistrer les modifications" class="btn btn-primary">
		</form>
	</div>
</body>
</html>


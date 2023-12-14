<?php
	require_once('../models/Enseignant.php');
	require_once('../controller/EnsCtrl.php');


	
	if (isset($_POST['submit'])) {
		
		$codeenseignant = $_POST['codeenseignant'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$daterecrutement = $_POST['daterecrutement'];
		$adresse = $_POST['adresse'];
		$mail = $_POST['mail'];
		$tel = $_POST['tel'];
		$codedepartement = $_POST['codedepartement'];
		$codegrade = $_POST['codegrade'];

		
		$enseignant = new C_Enseignant($codeenseignant, $nom, $prenom, $daterecrutement, $adresse, $mail, $tel, $codedepartement, $codegrade);
		$EnsCR=new EnsController();
	
        if ($EnsCR->ajouterEnseignant($enseignant)) {
            header("Location: liste_enseignant.php");
            exit;
        } else {
            echo "Erreur lors de l'ajout de l'enseignant.";
        }
        
	}
?>
<!DOCTYPE html>
<html>
<head>

	<title>Ajouter un enseignant</title>
	<!-- Liens vers les fichiers Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Ajouter un enseignant</h1>
	<form method="post" action="ajouter_enseignant.php">
	<div class="form-group">
		<label for="codeenseignant" class="control-label">Code enseignant:</label>
		<input type="text" class="form-control" id="codeenseignant" name="codeenseignant" required>
	</div>
	<div class="form-group">
		<label for="nom" class="control-label">Nom:</label>
		<input type="text" class="form-control" id="nom" name="nom" required>
	</div>
	<div class="form-group">
		<label for="prenom" class="control-label">Prénom:</label>
		<input type="text" class="form-control" id="prenom" name="prenom" required>
	</div>
	<div class="form-group">
		<label for="daterecrutement" class="control-label">Date de recrutement:</label>
		<input type="date" class="form-control" id="daterecrutement" name="daterecrutement" required>
	</div>
	<div class="form-group">
		<label for="adresse" class="control-label">Adresse:</label>
		<input type="text" class="form-control" id="adresse" name="adresse" required>
	</div>
	<div class="form-group">
		<label for="mail" class="control-label">Mail:</label>
		<input type="email" class="form-control" id="mail" name="mail" required>
	</div>
	<div class="form-group">
		<label for="tel" class="control-label">Tel:</label>
		<input type="tel" class="form-control" id="tel" name="tel" required>
	</div>
	<div class="form-group">
		<label for="codedepartement" class="control-label">Code département:</label>
		<input type="text" class="form-control" id="codedepartement" name="codedepartement" required>
	</div>
	<div class="form-group">
		<label for="codegrade" class="control-label">Code grade:</label>
		<input type="text" class="form-control" id="codegrade" name="codegrade" required>
	</div>
	<input type="submit" class="btn btn-primary" name="submit" value="Ajouter">
</form>

</body>
</html>

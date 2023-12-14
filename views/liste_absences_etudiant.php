<?php
include_once('../controller/C_stat.php');

$code_etudiant = $_POST['code_etudiant'];
$nom_etudiant = $_POST['nom_etudiant'];
$prenom_etudiant = $_POST['prenom_etudiant'];
$code_classe = $_POST['code_classe'];
$code_enseignant = $_POST['code_enseignant'];
$code_matiere= $_POST['code_matiere'];

$stat = new C_stat();
$result = $stat->Liste_absence_etudiant($code_etudiant,$nom_etudiant, $prenom_etudiant,$code_enseignant, $code_classe , $code_matiere);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Rapport d'absence de l'étudiant <?php echo $nom_etudiant . ' ' . $prenom_etudiant; ?></title>
	<!-- Ajout des fichiers CSS de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="mt-4">Rapport d'absence de l'étudiant <?php echo $nom_etudiant . ' ' . $prenom_etudiant . ' '; ?> est valide </h1>

	</div>

	<!-- Ajout des fichiers JavaScript de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


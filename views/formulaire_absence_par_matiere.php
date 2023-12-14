<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

	<title>Liste d'absences pour un étudiant et une matière donnée</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="my-5">Liste d'absences pour un etudiant et une matiere donnee</h1>
		<form method="POST" action="liste_absences_etudiant_par_matiere.php">
			<div class="form-group">
				<label for="code_etudiant">Code de l'etudiant :</label>
				<input type="text" class="form-control" id="code_etudiant" name="code_etudiant" required>
			</div>
			<div class="form-group">
				<label for="nom_classe" class="col-sm-2 control-label">Matiere:</label>
				<div class="col-sm-10">
					<select name="code_matiere" class="form-control" required>
					    <option value="">-- Choisissez la Matiere --</option>
						<?php
							include_once('../controller/MatCtrl.php');
							$contr = new MatController();
							$result = $contr->recupererMatieres();
							foreach ($result as $row) {
								echo "<option value='" . $row["codematiere"] . "'>" . $row["nommatiere"] . "</option>";
							}
						?>
					</select>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Affichage d'absences</button>
		</form>
	</div>
</body>
</html>

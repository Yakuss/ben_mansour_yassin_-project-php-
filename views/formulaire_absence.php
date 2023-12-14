<!DOCTYPE html>
<html>
<head>
	<title>Student Absence Report</title>
    <!-- Ajout de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Student Absence Report</h1>
		<form method="POST" action="liste_absences_etudiant.php" class="form-horizontal">
		<div class="form-group">
				<label for="nom_etudiant" class="col-sm-2 control-label">Code Etudiant:</label>
				<div class="col-sm-10">
					<input type="text" name="code_etudiant" class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<label for="nom_etudiant" class="col-sm-2 control-label">Nom:</label>
				<div class="col-sm-10">
					<input type="text" name="nom_etudiant" class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<label for="prenom_etudiant" class="col-sm-2 control-label">Prenom:</label>
				<div class="col-sm-10">
					<input type="text" name="prenom_etudiant" class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<label for="nom_etudiant" class="col-sm-2 control-label">Code Enseignant:</label>
				<div class="col-sm-10">
					<input type="text" name="code_enseignant" class="form-control" required>
				</div>
			</div>

			<div class="form-group">
				<label for="nom_classe" class="col-sm-2 control-label">Classe:</label>
				<div class="col-sm-10">
					<select name="code_classe" class="form-control" required>
					    <option value="">-- Choisissez le classe --</option>
						<?php
							include_once('../controller/C_stat.php');
							$contr = new C_stat();
							$result = $contr->getclasses();
							foreach ($result as $row) {
								echo "<option value='" . $row["codeclasse"] . "'>" . $row["nomclasse"] . "</option>";
							}
						?>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="nom_classe" class="col-sm-2 control-label">Matiere:</label>
				<div class="col-sm-10">
					<select name="code_matiere" class="form-control" required>
					    <option value="">-- Choisissez la matiere --</option>
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

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" value="Valider" class="btn btn-default">
				</div>
			</div>
		</form>
	</div>

    <!-- Ajout de jQuery et Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

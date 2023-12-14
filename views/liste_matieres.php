<?php
	require_once('../models/Matiere.php');
	require_once('../controller/MatCtrl.php');


$MatCR= new MatController();
$req=$MatCR->recupererMatieres();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Liste des matières</title>
	<!-- Ajout de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluide">
		<h1>Liste des matières</h1>

		<table class="table table-striped">
			<thead>
				<tr>
					<th>Code</th>
					<th>Nom</th>
					<th>Nombre d'heures de cours par semaine</th>
					<th>Nombre d'heures de TD par semaine</th>
					<th>Nombre d'heures de TP par semaine</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($req as $row) { ?>
					<tr>
						<td><?php echo $row['codematiere']; ?></td>
						<td><?php echo $row['nommatiere']; ?></td>
						<td><?php echo $row['nbreheurecoursparsemaine']; ?></td>
						<td><?php echo $row['nbreheuretdparsemaine']; ?></td>
						<td><?php echo $row['nbreheuretpparsemaine']; ?></td>
						<td>
							<a href="modifierMatiere.php?code=<?php echo $row['codematiere']; ?>" class="btn btn-warning btn-sm">Modifier</a>
							<a href="supprimerMatiere.php?code=<?php echo $row['codematiere']; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette matière ?')" class="btn btn-danger btn-sm">Supprimer</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<div class="content">
						<div class="inner">
							<ul class="actions">
								<li><a href="accueil.php" class="button">Retourner a l'acceuil</a></li>
							</ul>
						</div>
					</div>
</body>
</html>

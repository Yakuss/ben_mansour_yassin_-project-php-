<?php
	require_once('../models/Enseignant.php');
	require_once('../controller/EnsCtrl.php');

// Récupération de la liste des enseignants
$EnsCR= new EnsController();
$req=$EnsCR->liste();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Liste des enseignants</title>
	<!-- Ajout de Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluide">
		<h1 class="my-4">Liste des enseignants</h1>

		<table class="table table-striped">
			<thead>
				<tr>
					<th>Code enseignant</th>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Date de recrutement</th>
					<th>Adresse</th>
					<th>Mail</th>
					<th>Tel</th>
					<th>Code département</th>
					<th>Code grade</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($req as $row) { ?>
				<tr>
					<td><?php echo $row['codeenseignant']; ?></td>
					<td><?php echo $row['nom'];?></td>
					<td><?php echo $row['prenom']; ?></td>
					<td><?php echo $row['daterecrutement']; ?></td>
					<td><?php echo $row['adresse']; ?></td>
					<td><?php echo $row['mail']; ?></td>
					<td><?php echo $row['tel']; ?></td>
					<td><?php echo $row['codedepartement']; ?></td>
					<td><?php echo $row['codegrade']; ?></td>
					<td>
						<a class="btn btn-sm btn-primary" href="modifier_enseignant.php?code=<?php echo  $row['codeenseignant'];  ?>">Modifier</a>
						<a class="btn btn-sm btn-danger" href="supprimer_enseignant.php?code=<?php echo  $row['codeenseignant'];  ?>" onclick="return confirm('Voulez-vous vraiment supprimer cet enseignant ?')">Supprimer</a>
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

	<!-- Ajout de jQuery, Popper.js et Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

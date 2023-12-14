<?php
	require_once('../models/Etudiant.php');
	require_once('../controller/EtuCtrl.php');

// Récupération de la liste des étudiants en base de données
$EtuCR= new EtudController();
$req= $EtuCR->getListeEtudiants();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
    <!-- Ajout de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluide">
        <h1>Liste des étudiants</h1>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Code classe</th>
                    <th>N° inscription</th>
                    <th>Adresse</th>
                    <th>Mail</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($req as $row): ?>
                    <tr>
                        <td><?php echo $row['codeetudiant']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['prenom']; ?></td>
                        <td><?php echo $row['datenaissance']; ?></td>
                        <td><?php echo $row['codeclasse']; ?></td>
                        <td><?php echo $row['niminscription']; ?></td>
                        <td><?php echo $row['adresse']; ?></td>
                        <td><?php echo $row['mail']; ?></td>
                        <td><?php echo $row['tel']; ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="modifier_etudiant.php?code=<?php echo $row['codeetudiant']; ?>">Modifier</a>
                            <a class="btn btn-sm btn-danger" href="supprimer_etudiant.php?code=<?php echo $row['codeetudiant']; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?')">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
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
    <!-- Ajout de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha384-gStreN3rwwH8V7GmNyA1zV7yAUCQy8f7QlGQV7Lw6vFZi7nZB9IUE6+z5p6o5obn"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

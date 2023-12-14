<?php
	require_once('../models/Matiere.php');
	require_once('../controller/MatCtrl.php');

if (isset($_GET['code'])) {
    $codeMatiere = $_GET['code'];
    $MatCR= new MatController();
  
    $req = $MatCR->recupererMatiereParCode($codeMatiere);

   
    if ($req) {
       
        if (isset($_POST['nommatiere']) && isset($_POST['nbreheurecourspersemaine']) && isset($_POST['nbreheuretdpersemaine']) && isset($_POST['nbreheuretppersemaine'])) {
     
            $nomMatiere = $_POST['nommatiere'];
            $nbreHeureCoursParSemaine = $_POST['nbreheurecourspersemaine'];
            $nbreHeureTDParSemaine = $_POST['nbreheuretdpersemaine'];
            $nbreHeureTPParSemaine = $_POST['nbreheuretppersemaine'];
            
            $matiere = new C_Matiere($codeMatiere, $nomMatiere, $nbreHeureCoursParSemaine, $nbreHeureTDParSemaine, $nbreHeureTPParSemaine);
            $MatCR->modifierMatiere($matiere);
   
            header('Location: liste_matieres.php');
            exit();
        }
    } else {
        // La matière n'existe pas
    }
} else {
    // Le code de la matière 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier une matière</title>
    <!-- Inclure le fichier Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Modifier une matière</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="nommatiere">Nom de la matière :</label>
                <input type="text" class="form-control" name="nommatiere" value="<?php echo $req['nommatiere']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nbreheurecourspersemaine">Nombre d'heures de cours par semaine :</label>
                <input type="number" class="form-control" name="nbreheurecourspersemaine" value="<?php echo $req['nbreheurecoursparsemaine']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nbreheuretdpersemaine">Nombre d'heures de TD par semaine :</label>
                <input type="number" class="form-control" name="nbreheuretdpersemaine" value="<?php echo $req['nbreheuretdparsemaine']; ?>" required>
            </div>
            <div class="form-group">
                <label for="nbreheuretppersemaine">Nombre d'heures de TP par semaine :</label>
                <input type="number" class="form-control" name="nbreheuretppersemaine" value="<?php echo $req['nbreheuretpparsemaine']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="liste_matieres.php" class="btn btn-secondary">Retour</a>
        </form>
    </div>
    <!-- Inclure le fichier Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

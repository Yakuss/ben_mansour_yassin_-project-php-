<?php
include_once('../controller/C_stat.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $code_etudiant = $_POST['code_etudiant'];
  $code_matiere = $_POST['code_matiere'];
  

   //
  

  $stat = new C_stat();
  $rows = $stat->Liste_absence_etudiant_parMatiere($code_etudiant, $code_matiere);


  $nom_matiere= $stat->getmatierebyid($code_matiere);

 



  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>Rapport d'absence pour l'étudiant en <?php echo $nom_matiere['nommatiere']; ?></title>
    <!-- Ajout des fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    
    <div class="container">
    <h2 class="mt-4">Matiere  <?php echo $nom_matiere['nommatiere']; ?></h2>

      <?php if (is_array($rows) && count($rows) > 0) { ?>
        <table class="table">
          <thead>
            <tr>
              <th>Nom Etudiant</th>
              <th>Nom Enseignant</th>
              <th>Nombre d'absences</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($rows as $row) { ?>
              <tr>
                <td><?php echo $row['etudiant_nom']. " " . $row['etudiant_prenom']  ?></td>
                <td><?php echo $row['enseignant_nom'] . " " . $row['enseignant_prenom']; ?></td>
                <td><?php echo count($rows); ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <p>Nombre d'absences totale : <?php echo count($rows); ?></p>

      <?php } else { ?>
        <p>Aucune donnée trouvée pour la recherche.</p>
      <?php } ?>
      
    </div>

    <!-- Ajout des fichiers JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
  </html>
  
<?php } ?>

 <?php
  include_once('../database/config.php');
class C_stat extends Connexion{


  public function __construct() {
    parent::__construct();
  }

  public function Liste_absence_etudiant_parMatiere($code_etudiant, $code_matiere) {
    $stmt = $this->pdo->prepare("SELECT et.nom AS etudiant_nom, et.prenom AS etudiant_prenom,
        ens.nom AS enseignant_nom, ens.prenom AS enseignant_prenom
        FROM t_absence ta
        INNER JOIN t_etudiant et ON ta.codeetudiant = et.codeetudiant
        INNER JOIN t_enseignant ens ON ta.codeenseignant = ens.codeenseignant
        WHERE ta.codeetudiant = ? AND ta.codematiere = ?");

    if (!$stmt) {
        printf("Échec de la préparation de la requête : %s\n", $this->pdo->error);
        exit();
    }

    $stmt->execute([$code_etudiant, $code_matiere]);

    // Fetch the rows and return the result
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}




 
  public function Liste_absence_etudiant($code_etudiant, $nom_etudiant , $prenom_etudiant , $code_enseignant , $code_classe , $code_matiere) {
    $query="INSERT INTO t_absence (codeetudiant, nom, prenom, codeenseignant ,codeclasse , codematiere) VALUES (?, ?, ?, ?, ?, ?)";
    
    $stmt = $this->pdo->prepare($query);
    if (!$stmt) {
        return "Error preparing statement: " . $this->pdo->error;
    }
    $arry=array($code_etudiant,$nom_etudiant, $prenom_etudiant,$code_enseignant, $code_classe , $code_matiere);
   
    
    return $stmt->execute($arry);
}

public function getclasses(){
  $query = "SELECT * FROM t_classe ";
  $stmt = $this->pdo->prepare($query);
  if (!$stmt) {
      return "Error preparing statement: " . $this->pdo->error;
  }
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function getmatierebyid($code_matiere){
  $query = "SELECT nommatiere FROM t_matiere WHERE codematiere = '$code_matiere'";
  $stmt = $this->pdo->prepare($query);
  if (!$stmt) {
      return "Error preparing statement: " . $this->pdo->error;
  }
  $stmt->execute();
  $array=$stmt->fetch();
  return $array;
}





}
?>

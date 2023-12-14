<?php
include_once('../models/Matiere.php') ;
include_once('../database/config.php');
class MatController extends Connexion{
function __construct() {
parent::__construct();
}

function ajouterMatiere(C_Matiere $c){
    $query="INSERT INTO t_matiere (codematiere, nommatiere, nbreheurecoursparsemaine, nbreheuretdparsemaine, nbreheuretpparsemaine)
     VALUES (?, ?, ?, ?, ?)";
    $res=$this->pdo->prepare($query);
    $aryy =array($c->getCodeMatiere(),$c->getNomMatiere(),$c->getNbreHeureCoursParSemaine(),$c->getNbreHeureTDParSemaine(),$c->getNbreHeureTPParSemaine()) ;
    //var_dump($aryy);
    return $res->execute($aryy);
}

function recupererMatiereParCode($codematiere){
    $query="SELECT * FROM t_matiere WHERE codematiere = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($codematiere));
    $array= $res->fetch();
    return $array;
}

function supprimerMatiere($codematiere) {
    $query = "DELETE FROM t_matiere WHERE codematiere = ?";
    $res=$this->pdo->prepare($query);
    return $res->execute(array($codematiere));
}

function recupererMatieres(){
    $query = "SELECT * FROM t_matiere";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
}

function modifierMatiere(C_Matiere $c){
    $sql = "UPDATE t_matiere SET nommatiere = ?, nbreheurecoursparsemaine = ?, nbreheuretdparsemaine = ?, nbreheuretpparsemaine = ? WHERE codematiere = ?";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute(array($c->getNomMatiere(),$c->getNbreHeureCoursParSemaine(),$c->getNbreHeureTDParSemaine(),$c->getNbreHeureTPParSemaine(),$c->getCodeMatiere()));
}


}

?>


	
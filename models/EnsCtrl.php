<?php
include_once('../models/Enseignant.php') ;
include_once('../database/config.php');
class EnsController extends Connexion{
function __construct() {
parent::__construct();
}

function ajouterEnseignant(C_Enseignant $c){
    $query="INSERT INTO t_enseignant (codeenseignant, nom, prenom, daterecrutement, adresse, mail, tel, codedepartement, codegrade)
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $res=$this->pdo->prepare($query);
    $aryy =array($c->getCodeEnseignant(),$c->getNom(),$c->getPrenom(),$c->getDateRecrutement(),$c->getAdresse(),$c->getMail(),$c->getTel(),$c->getCodeDepartement(),$c->getCodeGrade()) ;
    //var_dump($aryy);
    return $res->execute($aryy);
}

function getEnseignant($codeenseignant){
    $query="SELECT * FROM t_enseignant WHERE codeenseignant = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($codeenseignant));
    $array= $res->fetch();
    return $array;
}

function supprimerEnseignant($codeenseignant) {
    $query = "DELETE FROM t_enseignant WHERE codeenseignant = ?";
    $res=$this->pdo->prepare($query);
    return $res->execute(array($codeenseignant));
}

function liste(){
    $query = "SELECT * FROM t_enseignant";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
}

function modifierEnseignant(C_Enseignant $c){
    $sql = "UPDATE t_enseignant SET nom = ?, prenom = ?, daterecrutement = ?, adresse = ?, mail = ?, tel = ?, codedepartement = ?, codegrade = ? WHERE codeenseignant = ?";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute(array($c->getNom(),$c->getPrenom(),$c->getDateRecrutement(),$c->getAdresse(),$c->getMail(),$c->getTel(),$c->getCodeDepartement(),$c->getCodeGrade(),$c->getCodeEnseignant()));
}


}

?>


	
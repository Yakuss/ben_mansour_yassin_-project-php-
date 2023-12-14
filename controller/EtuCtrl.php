<?php
include_once('../models/Etudiant.php') ;
include_once('../database/config.php');
class EtudController extends Connexion{
function __construct() {
parent::__construct();
}

function ajouterEtudiant(C_Etudiant $c){
    $query="INSERT INTO t_etudiant (codeetudiant, nom, prenom, datenaissance, 
    codeclasse, niminscription, adresse, mail, tel)
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $res=$this->pdo->prepare($query);
    $aryy =array($c->getCodeEtudiant(),$c->getNom(),$c->getPrenom(),$c->getDateNaissance(),$c->getCodeClasse(),$c->getNiminscription(),$c->getAdresse(),$c->getMail(),$c->getTel()) ;
    //var_dump($aryy);
    return $res->execute($aryy);
}

function getEtudiantByCode($codeEtudiant){
    $query="SELECT * FROM t_etudiant WHERE codeetudiant = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($codeEtudiant));
    $array= $res->fetch();
    return $array;
}

function supprimerEtudiant($codeEtudiant) {
    $query = "DELETE FROM t_etudiant WHERE codeetudiant = ?";
    $res=$this->pdo->prepare($query);
    return $res->execute(array($codeEtudiant));
}

function getListeEtudiants(){
    $query = "SELECT * FROM t_etudiant ORDER BY nom ASC";
    $res=$this->pdo->prepare($query);
    $res->execute();
    return $res;
}

function modifierEtudiant(C_Etudiant $c){
    $sql = "UPDATE t_etudiant SET nom = ?, prenom = ?, datenaissance = ?, codeclasse = ?, niminscription = ?, adresse = ?, mail = ?, tel = ? WHERE codeetudiant = ?";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute(array($c->getNom(),$c->getPrenom(),$c->getDateNaissance(),$c->getCodeClasse(),$c->getNiminscription(),$c->getAdresse(),$c->getMail(),$c->getTel(),$c->getCodeEtudiant()));
}


}

?>


	
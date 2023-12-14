<?php
// Classe C_Enseignant
class C_Enseignant {
  private $codeenseignant;
  private $nom;
  private $prenom;
  private $daterecrutement;
  private $adresse;
  private $mail;
  private $tel;
  private $codedepartement;
  private $codegrade;

  public function __construct($codeenseignant, $nom, $prenom, $daterecrutement, $adresse, $mail, $tel, $codedepartement, $codegrade) {
    $this->codeenseignant = $codeenseignant;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->daterecrutement = $daterecrutement;
    $this->adresse = $adresse;
    $this->mail = $mail;
    $this->tel = $tel;
    $this->codedepartement = $codedepartement;
    $this->codegrade = $codegrade;
  }

  public function getCodeEnseignant() {
    return $this->codeenseignant;
  }

  public function getNom() {
    return $this->nom;
  }

  public function getPrenom() {
    return $this->prenom;
  }

  public function getDateRecrutement() {
    return $this->daterecrutement;
  }

  public function getAdresse() {
    return $this->adresse;
  }

  public function getMail() {
    return $this->mail;
  }

  public function getTel() {
    return $this->tel;
  }

  public function getCodeDepartement() {
    return $this->codedepartement;
  }

  public function getCodeGrade() {
    return $this->codegrade;
  }
   
}
?>
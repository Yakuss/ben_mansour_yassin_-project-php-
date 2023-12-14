<?php
class C_Etudiant {
   // Propriétés
   private $codeEtudiant;
   private $nom;
   private $prenom;
   private $dateNaissance;
   private $codeClasse;
   private $niminscription;
   private $adresse;
   private $mail;
   private $tel;

   // Constructeur
   public function __construct($codeEtudiant, $nom, $prenom, $dateNaissance, $codeClasse, $niminscription, $adresse, $mail, $tel) {
      $this->codeEtudiant = $codeEtudiant;
      $this->nom = $nom;
      $this->prenom = $prenom;
      $this->dateNaissance = $dateNaissance;
      $this->codeClasse = $codeClasse;
      $this->niminscription = $niminscription;
      $this->adresse = $adresse;
      $this->mail = $mail;
      $this->tel = $tel;
   }

   // Méthodes
   public function getCodeEtudiant() {
      return $this->codeEtudiant;
   }

   public function setCodeEtudiant($codeEtudiant) {
      $this->codeEtudiant = $codeEtudiant;
   }

   public function getNom() {
      return $this->nom;
   }

   public function setNom($nom) {
      $this->nom = $nom;
   }

   public function getPrenom() {
      return $this->prenom;
   }

   public function setPrenom($prenom) {
      $this->prenom = $prenom;
   }

   public function getDateNaissance() {
      return $this->dateNaissance;
   }

   public function setDateNaissance($dateNaissance) {
      $this->dateNaissance = $dateNaissance;
   }

   public function getCodeClasse() {
      return $this->codeClasse;
   }

   public function setCodeClasse($codeClasse) {
      $this->codeClasse = $codeClasse;
   }

   public function getNiminscription() {
      return $this->niminscription;
   }

   public function setNiminscription($niminscription) {
      $this->niminscription = $niminscription;
   }

   public function getAdresse() {
      return $this->adresse;
   }

   public function setAdresse($adresse) {
      $this->adresse = $adresse;
   }

   public function getMail() {
      return $this->mail;
   }

   public function setMail($mail) {
      $this->mail = $mail;
   }

   public function getTel() {
      return $this->tel;
   }

   public function setTel($tel) {
      $this->tel = $tel;
   }
}
?>
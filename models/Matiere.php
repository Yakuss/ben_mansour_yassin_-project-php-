<?php
// Classe C_Matiere
class C_Matiere {
    private $codematiere;
    private $nommatiere;
    private $nbreheurecourspersemaine;
    private $nbreheuretdpersemaine;
    private $nbreheuretppersemaine;
    
    public function __construct($codematiere, $nommatiere, $nbreheurecourspersemaine, $nbreheuretdpersemaine, $nbreheuretppersemaine) {
        $this->codematiere = $codematiere;
        $this->nommatiere = $nommatiere;
        $this->nbreheurecourspersemaine = $nbreheurecourspersemaine;
        $this->nbreheuretdpersemaine = $nbreheuretdpersemaine;
        $this->nbreheuretppersemaine = $nbreheuretppersemaine;
    }
    
    public function getCodeMatiere()
    {
        return $this->codematiere;
    }
    
    public function getNomMatiere()
    {
        return $this->nommatiere;
    }

    public function getNbreHeureCoursParSemaine()
    {
        return $this->nbreheurecourspersemaine;
    }

    public function getNbreHeureTDParSemaine()
    {
        return $this->nbreheuretdpersemaine;
    }

    public function getNbreHeureTPParSemaine()
    {
        return $this->nbreheuretppersemaine;
    }
}
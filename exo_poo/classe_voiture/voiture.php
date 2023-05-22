<?php
class voiture{
    private $marque;
    private $modele;
    public $annee;
    public $couleur;
    public $vitesse_actuelle = 0;

    public function __construct($marque,$modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }

    // Setters

    public function setAnnee($annee){
        $this->annee = $annee;
    }
    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }


    // Getters
    public function getMarque(){ return $this->marque;}
    public function getModele(){ return $this->modele;}
    

    //affichage
    public function affichage(){
        echo "Marque : ".$this->marque." <br> Modele : ".$this->modele." <br> Année : ".$this->annee." <br> Couleur : ".$this->couleur." <br>Vitesse : ".$this->vitesse_actuelle." km/h";
    }

    public function accelerer($vitesse){
        $this->vitesse_actuelle += $vitesse;
    }
    
}


?>
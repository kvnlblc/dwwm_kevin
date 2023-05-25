<?php

class Parallelepipede extends Rectangle {
    protected $hauteur;

    public function __construct($longueur, $largeur, $hauteur) {
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
    }

    public function getHauteur() {
        return $this->hauteur;
    }

    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }

    public function volume() {
        return $this->aire() * $this->hauteur;
    }

    public function afficherParallelepipede() {
        parent::afficherParallelepipede();
        $volume = $this->volume();
        echo " - Volume : $volume";
    }
}


?>
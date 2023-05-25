<?php 

class Rectangle {
    protected $longueur;
    protected $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur() {
        return $this->longueur;
    }

    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    public function aire() {
        return $this->longueur * $this->largeur;
    }

    public function AfficherRectangle() {
        $aire = $this->aire();
        echo "Aire : $aire";
    }
}







?>
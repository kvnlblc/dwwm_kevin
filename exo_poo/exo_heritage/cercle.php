<?php

class Cercle {
    private $diametre;

    public function __construct($diametre) {
        $this->diametre = $diametre;
    }

    public function getDiametre() {
        return $this->diametre;
    }

    public function setDiametre($diametre) {
        $this->diametre = $diametre;
    }

    public function perimetre() {
        return $this->diametre * pi();
    }

    public function aire() {
        $rayon = $this->diametre / 2;
        return pow($rayon, 2) * pi();
    }

    public function afficherCercle() {
        $perimetre = $this->perimetre();
        $aire = $this->aire();
        echo "Diamètre : " . $this->diametre . " | Périmètre : " . $perimetre . " | Aire : " . $aire;
    }
}

?>
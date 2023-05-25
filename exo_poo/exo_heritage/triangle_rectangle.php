<?php
class TriangleRectangle {
    protected $base;
    protected $hauteur;

    public function __construct($base, $hauteur) {
        $this->base = $base;
        $this->hauteur = $hauteur;
    }

    public function getBase() {
        return $this->base;
    }

    public function setBase($base) {
        $this->base = $base;
    }

    public function getHauteur() {
        return $this->hauteur;
    }

    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }

    public function perimetre() {
        return ($this->base+$this->hauteur+sqrt(pow($this->base,2)+pow($this->hauteur,2)));
    }

    public function aire() {
        return $this->base * $this->hauteur / 2;
    }

    public function afficherTriangle() {
        $perimetre = $this->perimetre();
        $aire = $this->aire();
        echo "Base : " . $this->base . " | Hauteur : " . $this->hauteur . " | Périmètre : " . $perimetre . " | Aire : " . $aire;
    }
}
?>
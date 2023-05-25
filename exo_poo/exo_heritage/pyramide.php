<?php

class Pyramide extends TriangleRectangle {
    protected $hauteurPyramide;

    public function __construct($base, $hauteur, $hauteurPyramide) {
        parent::__construct($base, $hauteur);
        $this->hauteurPyramide = $hauteurPyramide;
    }

    public function volume() {
        $aireTriangle = parent::aire();
        return ($aireTriangle * $this->hauteurPyramide) / 3;
    }

    public function afficherPyramide() {
        $aire = $this->aire();
        $volume = $this->volume();
        echo "Périmètre: " . $aire . " - Volume: " . $volume;
    }
}


?>
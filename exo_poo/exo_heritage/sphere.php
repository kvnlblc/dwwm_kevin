<?php

class Sphere extends Cercle {
    public function __construct($diametre) {
        parent::__construct($diametre);
    }

    public function aire() {
        return parent::aire();
    }

    public function volume() {
        return 4 / 3 * pow($this->getDiametre() / 2, 3) * pi();
    }

    public function afficherSphere() {
        $aire = $this->aire();
        $volume = $this->volume();
        echo "Périmètre: " . $aire . " - Volume: " . $volume;
    }
}


?>
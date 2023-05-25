<?php
    class Zombie extends Personnage{
        private $vitesse;

        public function __construct($nom,$classe,$attaque,$pv,$forceDuBien,$vitesse){
            parent::__construct($nom,$classe,$attaque,$pv,$forceDuBien);
            $this->vitesse = $vitesse;
            
        }
        public function __toString(){

            $txt = "";
            $txt .= parent::__toString();
            $txt .= "Vitesse : " . $this->vitesse . "<br>";
            return $txt;  
        }
        public function gagneUnNiveau(){
            $this->vitesse++;
        }
        public function modifStats($attaque,$pv){
            $this->pv = $pv;
            $this->attaque = $attaque;
            $this->afficherDegat();
            echo "<br> Mes PV sont de : " . $this->pv;
        }


    }


 ?>
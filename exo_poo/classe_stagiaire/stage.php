<?php

class Stagiaire{
    private $nom;
    private $notes =[];

public function getNom($nom){ return $this->nom;}    
public function getNotes($notes){ return $this->notes;}    

public function __construct(string $nom, array $notes) {
    $this->nom = $nom;
    $this->notes = $notes;
}

public function calculerMoyenne() {
    $total = 0;
    foreach($this->notes as $notes) {
        $total += $notes;
    }
    return $total / count($this->notes);
}

public function trouverMax() {
    return max($this->notes);
}

public function trouverMin() {
    return min($this->notes);
}

public function affichage(){
    echo "Nom : ".$this->nom."<br>";
    echo "Moyenne : ".$this->calculerMoyenne();
    echo "<br>";
    echo "Max : ".$this->trouverMax();
    echo "<br>";
    echo "Min : ".$this->trouverMin();
    echo "<br>";
}

}



?>
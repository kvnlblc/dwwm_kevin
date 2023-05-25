<?php
class ville
{
private $nom;
private $depart;
public function __construct($nom,$depart)
{
$this->nom=$nom;
$this->depart=$depart;
}
public function ville()
{
$texte="La ville de $this->nom est dans le département : $this->depart<br>";
return $texte;
}
}

?>
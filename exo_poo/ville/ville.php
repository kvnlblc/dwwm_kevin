<?php
class ville
{
public $nom;
public $depart;
public function ville()
{
$texte="La ville de $this->nom est dans le département : $this->depart <br />";
return $texte;
}
}

?>
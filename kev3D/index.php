<?php


if(empty($_GET['page'])){
  require "views/accueil.php";
}else{
  switch($_GET['page']){
    case "accueil" : require "views/accueil.php";
    break;
    case "galerie" : require "views/galerie.php";
    break;
    default:
      require "views/accueil.php";
      var_dump($_GET['page']);
      break;

      
  }
}
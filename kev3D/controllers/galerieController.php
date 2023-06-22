<?php
require_once "models/ArticleManager.php";

class ArticleController {
    private $articleManager;

    public function __construct(){
        // on instancie et charge les livres
        $this->articleManager=new ArticleManager;
        $this->articleManager->chargementArticle();
    }
    
    public function afficherGaleries(){
        // $livres recup le tableau des livres
        $articles=$this->articleManager->getArticle();
        require "views/galerie.php";
        // qd on require, tous ce qui est declarer ds fonction et va dans require
    }

    public function afficherArticle($id){
        $articles=$this->articleManager->getArticleById($id);
        require "views/afficherArticle.php";
    }

    public function ajoutArticle(){
        require "views/ajoutArticle.php";
    }

    public function ajoutArticleValidation(){
        // charge image
        $file=$_FILES["image"];
        // ajouter image au image public
        $repertoire="public/images/";
        $nomImageAjoute= $this->ajoutImage($file,$repertoire);
        // ajouter le livre en bdd
        $this->articleManager->ajoutArticleBd($_POST["Titre"],$_POST["nbPages"],$nomImageAjoute);
        // redirige lutilisateur vers la pages des livres
        header("Location: ".URL."galerie");
    }

    private function ajoutImage($file, $dir){

        // si la personne a oublier choisir un fichier
        if(!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image");

        // sil y a pas de dossier on le cree
        // 0777 ce sont des droit
        if(!file_exists($dir)) mkdir($dir,0777);

        // recup extension fichier
        $extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
        // ajout numero fichier generer aleatoire (eviter dooublons)
        $random = rand(0,99999);
        // genere nom fichier
        $target_file = $dir.$random."_".$file['name'];

        // verifie si bien une image
        if(!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");
        // verifie extension
        if($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        // verifie si existe pas deja
        if(file_exists($target_file))
            throw new Exception("Le fichier existe déjà");
        // verifie taille
        if($file['size'] > 500000)
            throw new Exception("Le fichier est trop gros");
        // si pas reusssi a ajouter image
        if(!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        //  si functionne dit nom image qui a été ajouter
        else return ($random."_".$file['name']);
    }

    public function suppressionArticle($id){
        $nomImage= $this->articleManager->getArticleById($id)->getImage();
        // retire l'image de mon dossier
        unlink("public/images/".$nomImage);
        // supprime ds bdd
        $this->articleManager->suppressionArticleBd($id);
        // redirige lutilisateur vers la pages des livres
        header("Location: ".URL."galerie");
    }

    public function modificationLivre($id){
        $article = $this->articleManager->getArticleById($id);
        require "views/modifierGalerie.php";
    }

    public function modificationGalerieValidation(){
        $imageActuel = $this->galerieManager->getGalerieById((int)$_POST["identifiant"])->getImage();
        $file = $_FILES['image'];

        if($file["size"]>0){
            // supprime ancienne image dans dossier
            unlink("public/images/" . $imageActuel);
            // ajouter image au image public
            $repertoire="public/images/";
            $nomImageToAdd =$this->ajoutImage($file,$repertoire);
        }else{
            $nomImageToAdd = $imageActuel;
        }
        $this->galerieManager->modificationGalerieBd((int)$_POST["identifiant"], $_POST["titre"], $_POST["nbPages"],$nomImageToAdd);
        header("Location: ".URL."galerie");
    }

}

?>
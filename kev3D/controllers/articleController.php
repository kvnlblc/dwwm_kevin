<?php
require_once "models/ArticleManager.php";

class ArticleController {
    private $articleManager;

    public function __construct(){
        $this->articleManager = new ArticleManager();
        $this->articleManager->chargementArticles();
    }
    
    public function afficherGaleries(){
        $articles = $this->articleManager->getArticles();
        require "views/galerie.php";
    }

    public function afficherArticle($id){
        $article = $this->articleManager->getArticleById($id);
        require "views/afficherArticle.php";
    }

    public function ajoutArticles(){
        require "views/ajoutArticle.php";
    }

    public function ajoutArticleValidation(){
        $file = $_FILES["image"];
        $repertoire = "public/images/";
        $nomImageAjoute = $this->ajoutImage($file, $repertoire);
        $this->articleManager->ajoutArticleBd($_POST["Titre"], $_POST["nbPages"], $nomImageAjoute);
        header("Location: ".URL."galerie");
    }

    private function ajoutImage($file, $dir){
        if(!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image");

        if(!file_exists($dir))
            mkdir($dir, 0777);

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $target_file = $dir.$random."_".$file['name'];

        if(!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");

        if($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnue");

        if(file_exists($target_file))
            throw new Exception("Le fichier existe déjà");

        if($file['size'] > 500000)
            throw new Exception("Le fichier est trop gros");

        if(!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("L'ajout de l'image n'a pas fonctionné");
        else 
            return ($random."_".$file['name']);
    }

    public function suppressionArticle($id){
        $nomImage = $this->articleManager->getArticleById($id)->getImage();
        unlink("public/images/".$nomImage);
        $this->articleManager->suppressionArticleBd($id);
        header("Location: ".URL."galerie");
    }

    public function modificationArticle($id){
        $article = $this->articleManager->getArticleById($id);
        require "views/modifierGalerie.php";
    }

    public function modificationArticleValidation(){
        $imageActuel = $this->articleManager->getArticleById((int)$_POST["identifiant"])->getImage();
        $file = $_FILES['image'];

        if($file["size"] > 0){
            unlink("public/images/" . $imageActuel);
            $repertoire = "public/images/";
            $nomImageToAdd = $this->ajoutImage($file, $repertoire);
        } else{
            $nomImageToAdd = $imageActuel;
        }

        $this->articleManager->modificationArticleBd((int)$_POST["identifiant"], $_POST["titre"], $_POST["nbPages"], $nomImageToAdd);
        header("Location: ".URL."galerie");
    }
}

?>

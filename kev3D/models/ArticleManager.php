<?php
require_once "bdd.php";
require_once "Article.php";

class ArticleManager extends bdd{
    private $articles;

    public function ajoutArticles($article){
        $this->articles[]=$article;
    }

    public function getArticles(){
        return $this->articles;
    }

    public function chargementArticles(){
        $req=$this->getBdd()->prepare("SELECT * FROM ARTICLES");
        $req->execute();
        $mesarticles=$req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesarticles as $article){
            $l=new Article($article["id"], $article["titre"], $article["nbPages"], $article["image"]);
            $this->ajoutArticles($l);
        }
    }

    public function getArticleById($id){
        foreach($this->articles as $article){
            if($article->getId() === $id){
                return $article;
            }
        }
    }

    public function ajoutArticleBd($titre, $nbPages, $image){
        $req="INSERT INTO articles (titre, nbPages, image) VALUES (:titre, :nbPages, :image)";
        $stmt=$this->getBdd()->prepare($req);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":nbPages", $nbPages, PDO::PARAM_INT);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $resultat=$stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $article=new Article($this->getBdd()->lastInsertId(), $titre, $nbPages, $image);
            $this->ajoutArticles($article);
        }
    }

    public function suppressionArticleBd($id){
        $req="DELETE FROM articles WHERE id = :idArticle";
        $stmt=$this->getBdd()->prepare($req);
        $stmt->bindValue(":idArticle", $id, PDO::PARAM_INT);
        $resultat=$stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $article=$this->getArticleById($id);
            unset($article);
        }
    }

    public function modificationArticleBd($id, $titre, $nbPages, $image){
        $req = "UPDATE articles
                SET titre = :titre, nbPages = :nbPages, image = :image
                WHERE id = :id";

        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":nbPages", $nbPages, PDO::PARAM_INT);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        $resultat=$stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0){
            $article = $this->getArticleById($id);
            $article->setTitre($titre);
            $article->setNbPages($nbPages);
            $article->setImage($image);
        }
    }
}

?>
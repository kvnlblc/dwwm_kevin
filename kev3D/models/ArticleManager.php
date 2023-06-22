<?php
require_once "bdd.php";
require_once "article.php";

// Permet de mettre tous les livres dans le même tableau
class ArticleManager extends bdd{
    private $livres; //tableau de livre

    public function ajoutLivres($livre){
        $this->livres[]=$livre;
    }

    public function getLivres(){return $this->livres;}

    // Va permettre de recup livres bdd
    public function chargementLivres(){
        // appelle connexion à la bdd
        $req=$this->getBdd()->prepare("SELECT * FROM LIVRES");
        // on execute req
        $req->execute();
        // permet deviter des doublons
        $meslivres=$req->fetchAll(PDO::FETCH_ASSOC);

        // // Pour verifier
        // echo "<pre>";
        // print_r($livres);
        // echo "</pre>";

        // ferme requete
        $req->closeCursor();


        foreach($meslivres as $livre){
            // genere livre de la classe Livre
            $l=new Livre($livre["id"],$livre["titre"],$livre["nbPages"],$livre["image"]);
            $this->ajoutLivres($l);
        }

    }
    public function getLivreById($id){
        for($i=0;$i<count($this->livres);$i++){
            if($this->livres[$i]->getId() === $id){
                return $this->livres[$i];
            }
        }
    }

    public function ajoutLivreBd($titre,$nbPages,$image){
        $req="
        INSERT INTO livres (titre,nbPages,image)
        value (:titre,:nbPages,:image)";
        // connexion à bd
        $stmt=$this->getBdd()->prepare($req);
        // on met en lien la req avec ce qu'il y a dans la bd
        $stmt->bindValue(":titre",$titre,PDO::PARAM_STR); //PDO::PARAM_STR sert à securiser le type de données
        $stmt->bindValue(":nbPages",$nbPages,PDO::PARAM_INT);
        $stmt->bindValue(":image",$image,PDO::PARAM_STR);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // on ajoute le livre a la classe livre
            $livre=new Livre($this->getBdd()->lastInsertId(),$titre,$nbPages,$image);
            // ajoute livre au tableau de livre
            $this->ajoutLivres($livre);
        }
    }

    public function suppressionLivreBd($id){
        //  il est interdit de faire une concatenation avec $id, pour la securité
        $req="
        DELETE from livres where id= :idLivre";
        // connexion à bd
        $stmt=$this->getBdd()->prepare($req);
        $stmt->bindValue(":idLivre",$id,PDO::PARAM_INT);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // on supprime le livre au tableau de livre
            $livre=$this->getLivreById($id);
            unset($livre);
        }
    }

    public function modificationLivreBd($id,$titre,$nbPages,$image){
        $req = "
        UPDATE livres
        SET titre= :titre,nbPages= :nbPages,image= :image
        WHERE id= :id";

        // connexion à bd
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
        $stmt->bindValue(":nbPages", $nbPages, PDO::PARAM_INT);
        $stmt->bindValue(":image", $image, PDO::PARAM_STR);
        // sert à executer requete et a ajouter données à la bdd
        $resultat=$stmt->execute();
        // ferme connexion abdd
        $stmt->closeCursor();

        // si requete fonctionne 
        if($resultat>0){
            // mettre a jour le tableau des livres
            $this->getLivreById($id)->setTitre($titre);
            $this->getLivreById($id)->setNbpages($nbPages);
            $this->getLivreById($id)->setImage($image);
        }
    }
}
?>
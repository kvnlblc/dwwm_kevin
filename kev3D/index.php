<?php
// Définition de la constante URL
define("URL", str_replace("index.php", "", (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

// Récupération du fichier controller des articles
require_once "controllers/articleController.php";
$articleController = new ArticleController();

// Système de routage : fonctionne avec l'URL
try {
    // Si l'utilisateur est nulle part dans l'URL, page d'accueil
    if (empty($_GET["page"])) {
        header("Location: " . URL . "accueil");
    } else {
        $url = explode("/", filter_var($_GET["page"], FILTER_SANITIZE_URL));

        // On teste le premier élément de l'URL
        switch ($url[0]) {
            case "accueil":
                require "views/accueil.php";
                break;
            case "galerie":
                // Si on n'a rien en tant que 2ème élément dans mon URL
                if (empty($url[1])) {
                    $articleController->afficherGaleries();
                } else if ($url[1] === "l") {
                    // Afficher l'article concerné
                    $articleController->afficherArticle((int)$url[2]);
                } else if ($url[1] === "a") {
                    $articleController->ajoutArticles();
                } else if ($url[1] === "m") {
                    $articleController->modificationArticle((int)$url[2]);
                } else if ($url[1] === "s") {
                    $articleController->suppressionArticle((int)$url[2]);
                } else if ($url[1] === "av") {
                    $articleController->ajoutArticleValidation();
                } else if ($url[1] === "mv") {
                    $articleController->modificationArticleValidation();
                } else {
                    // Lever une erreur si la page n'existe pas
                    throw new Exception("La page n'existe pas");
                }
                break;
            case "formulaire_impression":
                require "views/formulaire_impression.php";
                break;
            case "traitement_formulaire":
                // Traiter le formulaire ici
                require "views/traitement_formulaire.php";
                break;
            case "confirmation":
                require "views/confirmation.php";
                break;
            case "inscription":
                require "views/inscription.php";
                break;
            case "connexion":
                require "views/connexion.php";
                break;
            case "traitement_inscription":
                require "views/traitement_inscription.php";
                break;
            default:
                // C'est une sorte de else ! De plus, on lève une erreur 404
                throw new Exception("Erreur 404 - Page non trouvée");
        }
    }
} catch (Exception $e) {   // Permet d'afficher le message d'erreur
    // Si l'erreur se produit dans la page "traitement_formulaire", on redirige vers la page d'accueil
    if ($_GET["page"] === "traitement_formulaire") {
        header("Location: " . URL . "accueil");
    } else {
        // Afficher la page d'erreur 404
        require "views/page_introuvable.php";
    }
}
?>

<?php

require_once 'bdd.php';

class InscriptionManager {
    // Méthode pour enregistrer un nouvel utilisateur
    public function enregistrerUtilisateur($nom, $email, $motDePasse, $adresseLivraison) {
        // Code pour enregistrer les données de l'utilisateur dans la base de données
        // Vous pouvez utiliser les variables $nom, $email, $motDePasse, $adresseLivraison pour les données de l'utilisateur

        // Exemple simplifié pour illustrer le processus
        // Connexion à la base de données
        $bdd = new Bdd();
        $connexion = $bdd->connect();

        // Préparation de la requête d'insertion
        $query = "INSERT INTO utilisateur (Nom, Email, Mot_de_passe, Adresse_livraison) VALUES (?, ?, ?, ?)";
        $statement = $connexion->prepare($query);

        // Exécution de la requête
        $statement->execute([$nom, $email, $motDePasse, $adresseLivraison]);

        // Fermeture de la connexion à la base de données
        $bdd->close();

        // Retourner true si l'inscription a réussi, ou false sinon
        return true;
    }
}

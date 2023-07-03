<?php

require_once "bdd.php";

class FormulaireManager extends Bdd {
    public function enregistrerDonnees($email, $typeImpression, $description) {
        $conn = $this->getBdd();

        try {
            $stmt = $conn->prepare("INSERT INTO formulaire_impression (email, type_impression, description) VALUES (?, ?, ?)");
            $stmt->execute([$email, $typeImpression, $description]);
            return true;
        } catch (PDOException $e) {
            echo "Une erreur est survenue lors de l'enregistrement des données : " . $e->getMessage();
            return false;
        }
    }
}

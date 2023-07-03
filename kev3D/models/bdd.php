<?php

class Bdd {
    private static $pdo;

    private static function setBdd() {
        try {
            self::$pdo = new PDO("mysql:host=localhost;dbname=kev3d;charset=utf8", "root", "");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur lors de la connexion à la base de données : " . $e->getMessage();
        }
    }

    protected function getBdd() {
        if (self::$pdo === null) {
            self::setBdd();
        }
        return self::$pdo;
    }
}

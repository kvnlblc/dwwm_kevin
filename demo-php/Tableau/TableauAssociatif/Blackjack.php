<?php

// Définir les constantes pour les cartes
const ASSE = 1;
const VALET = 11;
const DAME = 12;
const ROI = 13;

// Définir la fonction pour mélanger le paquet de cartes
function melangerPaquet($paquet) {
    shuffle($paquet);
    return $paquet;
}

// Définir la fonction pour calculer la valeur d'une main
function calculerValeurMain($main) {
    $valeur = 0;
    $asse = false;

    foreach ($main as $carte) {
        switch ($carte) {
            case ASSE:
                $valeur += 11;
                $asse = true;
                break;
            case VALET:
            case DAME:
            case ROI:
                $valeur += 10;
                break;
            default:
                $valeur += $carte;
                break;
        }
    }

    // Si la main contient un As et sa valeur est supérieure à 21, l'As vaut 1
    if ($asse && $valeur > 21) {
        $valeur -= 10;
    }

    return $valeur;
}

// Définir la fonction pour afficher la main d'un joueur
function afficherMain($main, $masquerPremiereCarte = false) {
    $affichageMain = '';

    foreach ($main as $index => $carte) {
        if ($index == 0 && $masquerPremiereCarte) {
            $affichageMain .= '[X]';
        } else {
            switch ($carte) {
                case ASSE:
                    $affichageMain .= 'A';
                    break;
                case VALET:
                    $affichageMain .= 'J';
                    break;
                case DAME:
                    $affichageMain .= 'Q';
                    break;
                case ROI:
                    $affichageMain .= 'K';
                    break;
                default:
                    $affichageMain .= $carte;
                    break;
            }
        }
        $affichageMain .= ' ';
    }

    echo $affichageMain . "\n";
}

// Définir la fonction pour demander au joueur s'il veut tirer une carte
function demanderCarte() {
    $choix = readline("Voulez-vous tirer une carte ? (o/n) ");

    return $choix == 'o';
}

// Définir le paquet de cartes
$paquet = array(
    ASSE, ASSE, ASSE, ASSE,
    2, 2, 2, 2,
    3, 3, 3, 3,
    4, 4, 4, 4,
    5, 5, 5, 5,
    6, 6, 6, 6,
    7, 7, 7, 7,
    8, 8, 8, 8,
    9, 9, 9, 9,
    10, 10, 10, 10,
    VALET, VALET, VALET, VALET,
    DAME, DAME, DAME, DAME,
    ROI, ROI, ROI, ROI
);

// Mélanger le paquet de cartes
$paquet = melangerPaquet($paquet);

// Initialiser les mains du joueur et du croupier
$joueurMain = array();
$croupierMain = array();

// Distribuer les deux premières cartes
$joueurMain[] = array_shift($paquet);
$croupierMain[] = array_shift($paquet);
$joueurMain[] = array_shift($paquet);
$croupierMain[] = array_shift($paquet);

// Afficher la main du joueur et la première carte du croupier
echo "Votre main : ";
afficherMain($joueurMain);
echo "Main du croupier : ";
afficherMain($croupierMain, true);

// Demander au joueur s'il veut tirer une carte ou rester
while (true) {
// Demander au joueur s'il veut tirer une carte
$tirerCarte = demanderCarte();
if ($tirerCarte) {
    // Si le joueur tire une carte, ajouter une carte à sa main
    $joueurMain[] = array_shift($paquet);

    // Afficher la nouvelle main du joueur
    echo "Votre main : ";
    afficherMain($joueurMain);
} else {
    // Si le joueur ne tire pas de carte, sortir de la boucle
    break;
}

// Si le joueur a une valeur de main supérieure à 21, il perd
if (calculerValeurMain($joueurMain) > 21) {
    echo "Vous avez dépassé 21. Vous avez perdu.\n";
    exit;
}
}

// Si le joueur n'a pas dépassé 21, le croupier tire des cartes jusqu'à avoir une valeur de main supérieure ou égale à 17
while (calculerValeurMain($croupierMain) < 17) {
$croupierMain[] = array_shift($paquet);
}

// Afficher la main du joueur et la main complète du croupier
echo "Votre main : ";
afficherMain($joueurMain);
echo "Main du croupier : ";
afficherMain($croupierMain);

// Déterminer le gagnant
$joueurValeur = calculerValeurMain($joueurMain);
$croupierValeur = calculerValeurMain($croupierMain);

if ($joueurValeur > 21) {
echo "Vous avez dépassé 21. Vous avez perdu.\n";
} else if ($croupierValeur > 21) {
echo "Le croupier a dépassé 21. Vous avez gagné !\n";
} else if ($joueurValeur > $croupierValeur) {
echo "Vous avez une main supérieure à celle du croupier. Vous avez gagné !\n";
} else if ($joueurValeur < $croupierValeur) {
echo "La main du croupier est supérieure à la vôtre. Vous avez perdu.\n";
} else {
echo "Égalité !\n";
}
<?php
$somme=0;
$nb1=readline("entrez le premier nombre : ");
$nb2=readline("entrez le deuxième nombre : ");
$operation=readline("Quelle operation voulez vous ?\n + = Addition\n - = Soustraction \n * = Multiplication\n / = Division\n % = Reste de division\n Choix : ");
switch($operation){
    case"+":
        $somme=$nb1+$nb2;
        echo "le resultat est : ".$somme;
        break;
        case"-":
            $somme=$nb1-$nb2;
            echo "le resultat est : ".$somme;
            break;
            case"*":
                $somme=$nb1*$nb2;
                echo "le resultat est : ".$somme;
                break;
                case"/":
                    
                    $somme=$nb1/$nb2;
                    echo " le resultat est : ".$somme;
                    break;
                    case"%":
                        $somme=$nb1%$nb2;
                        echo "le resultat est : ".$somme;
                        break;
                        default:
                        echo "Invalide";
}
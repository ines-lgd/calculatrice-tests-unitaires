<?php

namespace Ipssi\Evaluation;

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;
class Soustraction {
    public function soustraction(int $n1, int $n2)
    {
        return $n1 - $n2;
    }
}

do {
    $input = $climate->input("Entrez un nombre : ");
    $n1 = $input->prompt();

    $input = $climate->input("Entrez le nombre à soustraire : ");
    $n2 = $input->prompt();
    $erreur = false;

    try {
        $climate->output("Le résultat de la soustraction est : " . (new Soustraction())->soustraction($n1, $n2));
        echo PHP_EOL;
    } catch (\TypeError $e) {
        //Dans le cas où la saisie n'est pas un int
        echo 'Les saisies ne sont pas des nombres entiers' . PHP_EOL;
        $erreur = true;
    } catch (\Throwable $e) {
        //Pour toutes les autres erreurs
        echo 'Gros problème' . PHP_EOL;
        $erreur = true;
    }
} while ($erreur == true);
<?php

namespace Ipssi\Evaluation;

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

class Calculatrice {
    public $n1;
    public $n2;
    public $operation;

    function __construct(int $n1,int $n2,string $operation) {
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->operation = $operation;
    }
    public function addition(int $n1, int $n2)
    {
        return $n1 + $n2;
    }
    public function soustraction(int $n1, int $n2)
    {
        return $n1 - $n2;
    }
    public function muliplication(int $n1, int $n2)
    {
        return $n1 * $n2;
    }
    public function division(int $n1, int $n2) {
        if ($n2 === 0) {
            throw new DivisionByZeroError("Divison avec zéro impossible");
        } elseif ($n2 < 0) {
            throw new Exception('Le diviseur saisi est négatif');
        }
        return $n1 / $n2;
    }
}

do {
    $input = $climate->input("Entrez un nombre : ");
    $n1 = $input->prompt();

    $input = $climate->input("Entrez un 2e nombre : ");
    $n2 = $input->prompt();

    $input = $climate->input("Entrez un type d'operation : ");
    $operation = $input->prompt();
    $erreur = false;

    try {
        switch ($operation) {
            case addition:
                $climate->output("Le résultat est : " . (new Calculatrice())->addition($n1, $n2));
                break;
            case soustraction:
                $climate->output("Le résultat est : " . (new Calculatrice())->soustraction($n1, $n2));
                break;
            case multiplication:
                $climate->output("Le résultat est : " . (new Calculatrice())->muliplication($n1, $n2));
                break;
            case division:
                $climate->output("Le résultat est : " . (new Calculatrice())->division($n1, $n2));
                break;
        }
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


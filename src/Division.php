<?php
namespace Ipssi\Evaluation;

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;
class Division {
    public function division(int $n1, int $n2)
    {

        if ($n2 === 0) {
            throw new DivisionByZeroError("Divison avec zéro impossible");
        } elseif ($n2 < 0) {
            throw new Exception('Le diviseur saisi est négatif');
        }
        return $n1 / $n2;
    }
}

do {
    $input = $climate->input("Entrez l’entier à diviser : ");
    $n1 = $input->prompt();

    $input = $climate->input("Entrez le diviseur : ");
    $n2 = $input->prompt();
    $erreur = false;

    try {
        $climate->output("Le résultat de la division est : " . (new Division())->division($n1, $n2));
        echo PHP_EOL;
    } catch (Exception $e) {
        //Affichage des exceptions de la fonction
        $climate->output($e->getMessage());
        echo PHP_EOL;
        $erreur = true;
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


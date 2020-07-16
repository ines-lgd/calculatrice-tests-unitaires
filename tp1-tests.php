<?php
require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

use Ipssi\Evaluation\Calculatrice;

$add1 = new Calculatrice(75,10, addition);
$sou1 = new Calculatrice(0,128, soustraction);
$multi1 = new Calculatrice(15,18, multiplication);
$div1 = new Calculatrice(15,30, division);
$div0 = new Calculatrice(15,0, division);

echo PHP_EOL . PHP_EOL;
echo "Affichage du document" . PHP_EOL;
echo "=====================" . PHP_EOL;

echo "Test pour 75 + 10 = " . $add1 . PHP_EOL;
echo "Test pour 0 - 128 = " . $sou1 . PHP_EOL;
echo "Test pour 15 * 18 = " . $multi1 . PHP_EOL;
echo "Test pour 15 / 30 = " . $div1 . PHP_EOL;
echo "Test pour 15 / 0 = " . $div1 . PHP_EOL;
<?php
require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

use Ipssi\Evaluation\Addition;
use Ipssi\Evaluation\Soustraction;
use Ipssi\Evaluation\Multiplication;
use Ipssi\Evaluation\Division;

$add1 = new Addition(75,10);
$sou1 = new Soustraction(0,128);
$multi1 = new Multiplication(15,18);
$div1 = new Division(15,30);
$div0 = new Division(15,0);

echo PHP_EOL . PHP_EOL;
echo "Affichage du document" . PHP_EOL;
echo "=====================" . PHP_EOL;

echo "Test pour 75 + 10 = " . $add1 . PHP_EOL;
echo "Test pour 0 - 128 = " . $sou1 . PHP_EOL;
echo "Test pour 15 * 18 = " . $multi1 . PHP_EOL;
echo "Test pour 15 / 30 = " . $div1 . PHP_EOL;
echo "Test pour 15 / 0 = " . $div1 . PHP_EOL;
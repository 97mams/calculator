<?php

use App\Calculator;

require './vendor/autoload.php';

$numberOne = (float)readline("entrer premier nombre: ");
$operator = (int)readline("choisir un operatuer:(tapez 1 pour +, tapez 2 pour -, tapez 3 pour *, tapez 4 pour /): " );
$numberTwo = (float)readline("entrer séconde nombre: ");
$calcul = new Calculator($numberOne, $numberTwo);


if ($operator === 1)
{
    echo $calcul->addition()."\n";
} else if ($operator === 2)
{
    echo $calcul->substraction()."\n";
} else if ($operator === 3)
{
    echo $calcul->multiplication()."\n";
} else if ($operator === 4)
{
    echo $calcul->division()."\n";
} else {
    echo "veuillez choisir un operatuer\n";
}
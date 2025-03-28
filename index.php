<?php

use App\Calculator;

require './vendor/autoload.php';

$numberOne = (float)readline("entrer premier nombre: ");
$operator = (int)readline("choisir un operatuer:(tapez 1 pour +, tapez 2 pour -, tapez 3 pour *, tapez 4 pour /): " );
$numberTwo = (float)readline("entrer séconde nombre: ");
$calcul = new Calculator($numberOne, $numberTwo);

switch ($operator) {
    case 1:
        echo $calcul->addition()."\n";
        break;
    
    case 2:
        echo $calcul->substraction()."\n";
        break;

    case 3:
        echo $calcul->multiplication()."\n";
        break;

    case 4:
        echo $calcul->substraction()."\n";
        break;

    default:
        echo "Veuillez choisir un operatuer\n";
        break;
}
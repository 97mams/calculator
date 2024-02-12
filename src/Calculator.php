<?php

namespace App;

class Calculator
{

    public function __construct(
        private float $firstNumber,
        private float $secondNumber
    ){}

    public function addition ():float
    {
        return $this->firstNumber + $this->secondNumber;
    }

    public function multiplication ():float
    {
        return ($this->firstNumber * $this->secondNumber);
    }

    public function substraction ():float
    {
        return $this->firstNumber - $this->secondNumber;
    }

    public function division ():float
    {
        return $this->firstNumber / $this->secondNumber;
    }
}
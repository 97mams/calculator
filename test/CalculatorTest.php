<?php

namespace Test;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @var calcul
     */
    private $calcul;

    private int $firstValue = 4;
    private  int $secondValue = 2;

    /**
     * @before
     */
    public function setUpCalculator()
    {
        $this->calcul = new Calculator($this->firstValue, $this->secondValue);
    }

    public function testAddition()
    {
        $this->assertEquals(6, $this->calcul->addition());
    }

    public function testMultiplication()
    {
        $this->assertEquals(8, $this->calcul->multiplication());
    }

    public function testSubstraction()
    {
        $this->assertEquals(2, $this->calcul->substraction());
    }

    public function testDivision()
    {
        $this->assertEquals(2, $this->calcul->division());
    }
}

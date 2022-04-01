<?php


namespace App\Entity\Calculation;

use App\Entity\Calculation\CalculationInterface;

class Multiplication implements CalculationInterface
{
    public function doCalculation($firstNumber, $secondNumber)
    {
        return $firstNumber * $secondNumber;
    }
}
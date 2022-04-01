<?php


namespace App\Entity\Calculation;


use App\Entity\Calculation\CalculationInterface;

class Addition implements CalculationInterface
{
    public function doCalculation($firstNumber, $secondNumber)
    {
        return $firstNumber + $secondNumber;
    }
}
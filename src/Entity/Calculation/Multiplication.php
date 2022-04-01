<?php


namespace App\Entity\Calculation;

use App\Entity\Calculation\CalculationInterface;

class Multiplication implements CalculationInterface
{
    public function performCalculation($inputOne, $inputTwo)
    {
        return $inputOne * $inputTwo;
    }
}
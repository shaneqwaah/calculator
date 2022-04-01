<?php


namespace App\Entity\Calculation;


use App\Entity\Calculation\CalculationInterface;

class Addition implements CalculationInterface
{
    public function performCalculation($inputOne, $inputTwo)
    {
        return $inputOne + $inputTwo;
    }
}
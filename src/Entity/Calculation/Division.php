<?php


namespace App\Entity\Calculation;

use App\Entity\Calculation\CalculationInterface;

class Division implements CalculationInterface
{
    public function performCalculation($inputOne, $inputTwo)
    {
        if ($inputTwo == 0){
            return 'Division by zero error';
        } else {
            return $inputOne / $inputTwo;
        }
    }
}
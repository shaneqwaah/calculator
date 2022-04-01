<?php

namespace App\Entity\Calculation;


interface CalculationInterface
{
    public function doCalculation($firstNumber, $secondNumber);
}
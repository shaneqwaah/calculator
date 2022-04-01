<?php

namespace App\Entity\Calculation;


interface CalculationInterface
{
    public function performCalculation($inputOne, $inputTwo);
}
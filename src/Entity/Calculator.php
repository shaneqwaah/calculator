<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\Calculation\CalculationInterface;
use App\Entity\Calculation\Addition;
use App\Entity\Calculation\Subtraction;
use App\Entity\Calculation\Multiplication;
use App\Entity\Calculation\Division;


class Calculator {
    /*
     * @Assert\NotBlank()
     * @Assert\Type("double")
     */
    private $firstValue;

    /*
     * @Assert\NotBlank()
     * @Assert\Type("double")
     */
    private $secondValue;

    /*
     * @Assert\NotBlank()
     * @Assert\Choice({"addition", "subtraction", "multiplication", "division"})
     */
    private $expression;

    public function getFirstValue()
    {
        return $this->firstValue;
    }

    public function setFirstValue($firstValue)
    {
        $this->firstValue = $firstValue;
    }

    public function getSecondValue()
    {
        return $this->secondValue;
    }

    public function setSecondValue($secondValue)
    {
        $this->secondValue = $secondValue;
    }

    public function getExpression()
    {
        return $this->expression;
    }

    public function setExpression($expression)
    {
        $this->expression = $expression;
    }

    public function calculationsFactory()
    {
        $class = rtrim('App\Entity\Calculation\ ') . ucfirst($this->getExpression());
        if(class_exists($class)){
            $instance = new $class();
            return  $instance->doCalculation($this->getFirstValue(), $this->getSecondValue());
        }
        throw new \RuntimeException('The class not found on Calculator::calculationsFactory()!');
    }
}

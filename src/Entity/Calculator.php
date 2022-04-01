<?php

namespace App\Entity;



class Calculator {

    private $expression;
    private $inputOne;
    private $inputTwo;


    public function getFirstValue()
    {
        return $this->inputOne;
    }

    public function setFirstValue($inputOne)
    {
        $this->inputOne = $inputOne;
    }

    public function getSecondValue()
    {
        return $this->inputTwo;
    }

    public function setSecondValue($inputTwo)
    {
        $this->inputTwo = $inputTwo;
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
            return  $instance->performCalculation($this->getFirstValue(), $this->getSecondValue());
        }
        throw new \RuntimeException('The class not found on Calculator::calculationsFactory()!');
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Calculator;
use App\Form\CalculatorType;

class CalculatorController extends AbstractController {

    /**
     * @Route("/calculator", name="calculator")
     */
    public function calculate(Request $request)
    {
        $calculator = new Calculator();
        $form = $this->createForm(CalculatorType::class, $calculator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $calculate = $form->getData();
            $result = $calculate->calculationsFactory();
        }

        return $this->render('Calculator/Calculator.html.twig',
            [
                'form' => $form->createView(),
                'result' => isset($result) ? $result : null
            ]);
    }

}

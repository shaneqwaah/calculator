<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type;

class CalculatorType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('firstValue', Type\NumberType::class)
                ->add('expression', Type\ChoiceType::class,
                    [
                        'choices' =>
                            [
                                'Addition' => 'addition',
                                'Subtraction' => 'subtraction',
                                'Multiplication' => 'multiplication',
                                'Division' => 'division'
                            ],
                        'expanded' => true
                    ]
                )
                ->add('secondValue', Type\NumberType::class)
                ->add('calculate', Type\SubmitType::class);
	}
}

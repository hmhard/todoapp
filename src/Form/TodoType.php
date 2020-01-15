<?php

namespace App\Form;

use App\Entity\Todo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TodoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,['attr'=>['class'=> 'form-control']])
            ->add('isCompleted',null,['attr'=>['class'=> 'form-control']])
            ->add('createdAt',null,['attr'=>['class'=> 'form-control']])
            ->add('updatedAt',null,['attr'=>['class'=> 'form-control']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Todo::class,
        ]);
    }
}

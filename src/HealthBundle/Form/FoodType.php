<?php

namespace HealthBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FoodType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('displayName')
            ->add('brandName')
            ->add('description')
            ->add('servingSize')
            ->add('servingsPerContainer')
            ->add('calories')
            ->add('carbohydrates')
            ->add('protein')
            ->add('fat')
            ->add('saturatedFat')
            ->add('polyunsaturatedFat')
            ->add('monounsaturatedFat')
            ->add('transFat')
            ->add('cholesterol')
            ->add('sodium')
            ->add('potassium')
            ->add('dietaryFiber')
            ->add('sugars')
            ->add('vitaminA')
            ->add('vitaminC')
            ->add('calcium')
            ->add('iron')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HealthBundle\Entity\Food'
        ));
    }
}

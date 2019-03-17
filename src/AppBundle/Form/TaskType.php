<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaskType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomT', TextType::class ,array('label' => 'Name :'))
            ->add('descriptionT', TextType::class ,array('label' => 'Description :'))
            ->add('dateDebutT', DateType::class ,array('label' => 'Start date :'))
            ->add('dateFinT', DateType::class ,array('label' => 'End date :'))
            ->add('etatT', ChoiceType::class, [
                'choices' => [
                    'In progress' => 'In progress',
                    'Completed' => 'Completed',
                    'Abort' =>  'Abort'
                ],
                'label' => 'Statement'
            ])
            ->add('idProjetT', null, array('label' => 'Name of the linked project'))
            ->add('idDevT', null, array('label' => 'Username of the software developer'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Task'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_task';
    }


}

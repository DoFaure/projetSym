<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomP' ,TextType::class ,array('label' => 'Name :'))
            ->add('descriptionP',TextType::class ,array('label' => 'Description :'))
            ->add('dateDebutP',DateType::class,array('label' => 'Start date :'))
            ->add('dateFinP',DateType::class ,array('label' => 'End date :'))
            ->add('etatP', ChoiceType::class, [
                'choices' => [
                    'In progress' => 'In progress',
                    'Completed' => 'Completed',
                    'Abort' =>  'Abort'
                ],
                'label' => 'Statement'
            ])
            ->add('nomClient', TextType::class ,array('label' => 'Client name :'))
            ->add('idChefP', null, array('label' => 'Name of the project manager :'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Project'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_project';
    }


}

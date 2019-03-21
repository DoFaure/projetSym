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
        $builder->add('nomP' ,TextType::class ,array('label' => 'project.name :'))
            ->add('descriptionP',TextType::class ,array('label' => 'project.description :'))
            ->add('dateDebutP',DateType::class,array('label' => 'project.start_date :'))
            ->add('dateFinP',DateType::class ,array('label' => 'project.end_date :'))
            ->add('etatP', ChoiceType::class, [
                'choices' => [
                    'project.progress' => 'project.progress',
                    'project.completed' => 'project.completed',
                    'project.abort' =>  'project.abort'
                ],
                'label' => 'label.status'
            ])
            ->add('nomClient', TextType::class ,array('label' => 'project.client_name :'))
            ->add('idChefP', null, array('label' => 'project.manager :'));
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

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
        $builder->add('nomT', TextType::class ,array('label' => 'label.name'))
            ->add('descriptionT', TextType::class ,array('label' => 'label.description'))
            ->add('dateDebutT', DateType::class ,array('label' => 'label.start_date'))
            ->add('dateFinT', DateType::class ,array('label' => 'label.end_date'))
            ->add('etatT', ChoiceType::class, [
                'choices' => [
                    'label.progress' => 'label.progress',
                    'label.completed' => 'label.completed',
                    'label.abort' =>  'label.abort'
                ],
                'label' => 'label.status',
            ])
          //  ->add('idProjetT', null, array('label' => 'label.project'))
            ->add('idDevT', null,
                array('label' => 'label.developer')
            );
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

<?php

namespace TA\CurriculumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('courseId')
            ->add('title')
            ->add('description')
            ->add('type')
            ->add('ordering')
            ->add('course')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TA\CurriculumBundle\Entity\Content'
        ));
    }

    public function getName()
    {
        return 'ta_curriculumbundle_content';
    }
}

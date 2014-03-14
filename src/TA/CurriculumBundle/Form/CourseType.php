<?php

namespace TA\CurriculumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description','textarea')
            ->add('image','file')
            ->add('promoVideo')
            //->add('dateCreated')
            //->add('dateUpdated')
            //->add('visits')
            ->add('targetAgeFrom')
            ->add('targetAgeTo')            
            ->add('categories','entity',array(
                    'class' => 'TACurriculumBundle:Category',
                    'property' => 'name',                    
                    'multiple' => true               
                 )
            )
         ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TA\CurriculumBundle\Entity\Course'
        ));
    }

    public function getName()
    {
        return 'ta_curriculumbundle_course';
    }
}

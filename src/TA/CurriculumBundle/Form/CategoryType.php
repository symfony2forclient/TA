<?php

namespace TA\CurriculumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityManager;


class CategoryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description','textarea')
            ->add('image','file')
            //->add('status')
            //->add('ordering')
            //->add('dateCreated')
            //->add('dateUpdated')
            ->add('parentId', 'entity', array(
                'class' => 'TACurriculumBundle:Category',
                'property' => 'name'
                //'choices' => $this->getAllCategories()
                ))
            //->add('save', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TA\CurriculumBundle\Entity\Category'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ta_curriculumbundle_category';
    }
    
  
}

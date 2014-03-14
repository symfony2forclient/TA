<?php

namespace TA\CurriculumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contentId')
            ->add('youtubeId')
            ->add('dateCreated')
            ->add('dateUpdated')
            ->add('content')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TA\CurriculumBundle\Entity\Video'
        ));
    }

    public function getName()
    {
        return 'ta_curriculumbundle_video';
    }
}

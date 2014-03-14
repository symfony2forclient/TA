<?php

namespace TA\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends \Symfony\Component\Form\AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //parent::buildForm($builder, $options);
        // add your custom field
       $builder->add('name',new RegistrationFormType());
       die();
    }

    public function getName()
    {
        return 'acme_user_registration';
    }
}
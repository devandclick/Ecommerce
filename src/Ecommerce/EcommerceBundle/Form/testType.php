<?php

namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class testType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //Ici nous allons faire notre formulaire en PHP 
        //Le html c'est fini
        $builder
            ->add('email','email')
            ->add('nom',null,array('required' => false))
            ->add('prenom')
            ->add('sexe','choice',array('choices' => array('0' => 'homme',
                                                           '1' => 'femme',
                                                           '2' => 'autre'),'preferred_choices' => array('1','2'),'expanded' => false))
            ->add('contenu','textarea')
            ->add('date','datetime')
            ->add('utilisateurs','entity', array('class' => 'Utilisateurs\UtilisateursBundle\Entity\Utilisateurs'))
            ->add('pays','country')
            ->add('envoyer','submit');
    }
    
    public function getName()
    {
        return 'ecommerce_ecommercebundle_test';
    }
}
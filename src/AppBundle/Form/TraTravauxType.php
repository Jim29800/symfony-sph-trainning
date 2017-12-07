<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TraTravauxType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('traTitre', null, ["label" => "Titre"])
        ->add('traDescription', null, ["label" => "Déscription"])
        ->add('traPrix', null, ["label" => "Prix"])
        ->add('traDateDebut', null, ["label" => "Date du début des travaux"])
        ->add('traDateDevis', null, ["label" => "Date de la signature du devis"])
        ->add('traDateRappel', null, ["label" => "Date de rappel"])
        ->add('traModePaiment', null, ["label" => "Mode de paiement"])
        ->add('traVerif', null, ["label" => "Chantier vérifier"])
;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TraTravaux'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_tratravaux';
    }


}

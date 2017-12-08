<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class TraTravauxType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('traTitre', null, ["label" => "Titre"])
        ->add('traDescription', TextareaType::class, ["label" => "Déscription"])
        ->add('traPrix', MoneyType::class, ["label" => "Prix", ])
        ->add('traDateDebut', null, ["label" => "Date du début des travaux", 'widget' => 'single_text'])
        ->add('traDateDevis', null, ["label" => "Date de la signature du devis", 'widget' => 'single_text'])
        ->add('traDateRappel', null, ["label" => "Date de rappel", 'widget' => 'single_text'])
        ->add('traModePaiment', null, ["label" => "Mode de paiement"])
        //->add('traVerif', null, ["label" => "Chantier vérifier"])
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

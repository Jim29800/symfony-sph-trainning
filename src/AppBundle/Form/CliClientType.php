<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CliClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cliNom', null, ["label" => "Nom"])
            ->add('cliPrenom', null,["label" => "Prénom"])
            ->add('cliEmail', null,["label" => "Email"])
            ->add('cliAdresse', null,["label" => "Adresse"])
            ->add('cliCp', null,["label" => "Code Postal"])
            ->add('cliVille', null,["label" => "Ville"])
            ->add('cliTel', null,["label" => "Téléphone"])
            ->add('cliCommentaire', null,["label" => "Commentaire"])
            ->add('cliProvenance', ChoiceType::class,
                 array("label" => "Provenance",
                        'choices'  => array(
                                        'WEB' => 'WEB',
                                        'PROSPECTION' => 'PROSPECTION',
                                        )
                        )
                    );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\CliClient'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_cliclient';
    }


}

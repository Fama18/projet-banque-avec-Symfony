<?php

namespace App\Form;

use App\Entity\Compte;
use App\Entity\TypeCompte;
use App\Entity\ClientMoral;
use App\Entity\ClientPhysique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class CompteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroagence', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('numerocompte', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('clerib', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('clientphysique', EntityType::class,
            [
                "class" => ClientPhysique::class,
                "choice_label" => "numCni",
                "placeholder" => "--Selectionner le client physique--",
                "required" => false,
                "attr" => ["class" => "form-control"]
            ])
            ->add('clientmoral', EntityType::class,
            [
                "class" => ClientMoral::class,
                "choice_label" => "nomentreprise",
                "placeholder" => "--Selectionner le client moral--",
                "required" => false,
                "attr" => ["class" => "form-control"]
            ])
            ->add('typecompte', EntityType::class,
            [
                "class" => TypeCompte::class,
                "choice_label" => "libelle",
                "placeholder" => "--Selectionner le type de compte--",
                "required" => false,
                "attr" => ["class" => "form-control"]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Compte::class,
        ]);
    }
}

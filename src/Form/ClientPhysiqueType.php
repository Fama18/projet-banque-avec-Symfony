<?php

namespace App\Form;

use App\Entity\ClientPhysique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientPhysiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numCni', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('nom', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('prenom', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('civilite', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('adresse', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('email', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('telephone', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('datenaissance', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ClientPhysique::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\ClientMoral;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientMoralType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomentreprise', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('adresseentreprise', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('raisonsocial', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
            ->add('numident', TextType::class,
            [
                "attr" => ["class" => "form-control"]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ClientMoral::class,
        ]);
    }
}

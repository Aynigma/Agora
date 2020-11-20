<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', null, ['label' => 'Adresse e-mail'])
            ->add('agreeTerms', CheckboxType::class, 
            [
                'label' => 'Je confirme avoir lu et accepté les termes du service (obligatoire !)',
                'mapped' => false,
                'constraints' => [new IsTrue(['message' => 'Désolé, il ne vous est pas possible de vous inscrire sans accepter les termes du service.',]),],
            ])
            ->add('plainPassword', PasswordType::class, 
            [
                'label' => 'Mot de passe',
                'mapped' => false,
                'constraints' => 
                [
                    new NotBlank(['message' => 'Veuillez saisir un mot de passe',]),
                    new Length
                    ([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit être d\'au moins {{ limit }} caractères',
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => User::class,]);
    }
}

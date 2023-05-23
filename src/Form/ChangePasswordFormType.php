<?php

namespace App\Form;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Length;
class ChangePasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('password',RepeatedType::class,
            ["type"=>PasswordType::class,
            "invalid_message" => "The password is not matched",
            'first_options'=>['label'=>"password","attr"=>["id"=>"password"]],
            'second_options'=>['label'=>"password_repeat","attr"=>["id"=>"repeat_password"]],
            'constraints'=>[new Length(['min'=>6,"max"=>20])]
            ])->add('submit',SubmitType::class,['attr'=>['class'=>'ad']]);
            

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'required' => false,
            'csrf_protection'=>false,
            'mapped' => false
            //
        ]);
    }
    public function getName(){
        return null;
    }
}

<?php

namespace App\Form;

use App\Entity\User;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Length;

class ChangePasswordFormType extends AbstractType
{

    private $doctrineManager;
    
    public function __construct(ManagerRegistry $doctrineManager){
        $this->doctrineManager = $doctrineManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('password',RepeatedType::class,
            ["type"=>PasswordType::class,
            "invalid_message" => "Girdiğiniz şifreler eşleşmiyor",
            'first_options'=>['label'=>"password","attr"=>["id"=>"password"]],
            'second_options'=>['label'=>"password_repeat","attr"=>["id"=>"repeat_password"]],
            'constraints'=>[new Length(['min'=>6,'minMessage'=>"karakter sayısı minimum 6 karakter olmalı ","max"=>20,"maxMessage"=>"karakter sayısı maximum 20 karakter olmalı",])]
            ])->add('submit',SubmitType::class,['attr'=>['class'=>'ad']]);
            
            /*$builder->addEventListener(FormEvents::POST_SUBMIT,function(FormEvent $formEvent,Security $security){
                $form = $formEvent->getForm()->getData();
                $member = $this->doctrineManager->getManager()->getRepository(User::class)->findOneBy(['email'=>$security->getUser()->getEmail()]);
                if($member){
                    $formEvent->getForm()->get('email')->addError(new FormError('Bu emaile kayıtlı bir hesap bulunmaktadır'));
                }
            }); */

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

<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Length;
class RegisterFormType extends AbstractType
{

    private $doctrineManager;
    
    public function __construct(ManagerRegistry $doctrineManager){
        $this->doctrineManager = $doctrineManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email',EmailType::class
            ,['attr'=>['class'=>"ad"],"constraints"=>[ 
                new Assert\Email([
                    'message'=>'The email is format error
                    ']),
            new Assert\NotBlank([
                'message' => "This is required field"
            ])
        
            ]])
            ->add('password',RepeatedType::class,
            ["type"=>PasswordType::class,
            "invalid_message" => "The password is not matched",
            'first_options'=>['label'=>"password","attr"=>["id"=>"password"]],
            'second_options'=>['label'=>"password_repeat","attr"=>["id"=>"repeat_password"]],
            'first_name'  => 'password_one', 
            'second_name' => 'password_two', 
            'constraints'=>[new Length(['min'=>6,'max'=>20])]
            
            ])->add('submit',SubmitType::class,['attr'=>['class'=>'ad']]);

            $builder->addEventListener(FormEvents::POST_SUBMIT,function(FormEvent $formEvent){
                $form = $formEvent->getForm()->getData();
                $member = $this->doctrineManager->getManager()->getRepository(User::class)->findOneBy(['email'=>$form['email']]);
                if($member){
                    $formEvent->getForm()->get('email')->addError(new FormError('This email is use already'));

                }
            });
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'required' => true,
            'csrf_protection'=>false,
            'mapped' => false
            //
        ]);
    }
    public function getName(){
        return null;
    }
}

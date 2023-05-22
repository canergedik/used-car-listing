<?php

namespace App\Form;


use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;





class FileUploadFormType extends AbstractType
{

    
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,array('mapped'=>false))
            ->add('description', TextareaType::class,array('mapped'=>false))
            
            ->add('files',FileType::class,['attr'=>['accept'=>'application/json','required'=>false,'multiple'=>true,'data_class'=>null,'label'=>'Json Files']])
            
            ->add('submit',SubmitType::class,['attr'=>['class'=>'ad']]);
            
            
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'required' => false,
            'mapped' => false
            //
        ]);
    }
    
}

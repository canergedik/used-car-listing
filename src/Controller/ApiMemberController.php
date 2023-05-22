<?php
namespace App\Controller;
use App\Entity\Products;
use App\Form\ChangePasswordFormType;
use App\Form\FileUploadFormType;
use App\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/api/v1/', name: 'api_')]

class ApiMemberController extends AbstractController
{
    private $doctrineManager;
    private $requestStack;
   
    
    private $entityManager;

    public $targetDirectory;
    public function __construct(ManagerRegistry $entityManager,RequestStack $requestStack){

         $this->entityManager = $entityManager;
         $this->requestStack = $requestStack;
    
    }

    #[Route('user/add-file', name: 'upload_form',methods:['GET','POST'])]
    public function userSetForm($filesPath,FileUploader $fileUploader){
      $data = array();
      $data['success'] = false;
      $form = $this->createForm(FileUploadFormType::class);
      if($this->requestStack->getCurrentRequest()->getMethod() == "POST"){
          $form->handleRequest($this->requestStack->getCurrentRequest());
          if($form->isSubmitted() && $form->isValid()){
             $files =  $form->get('files')->getData();
             if($files){
               $filesName = $fileUploader->upload($filesPath,$files);
               $this->jsonAddFile($filesPath.$filesName);
               $data['success'] = true ;
               $data['files_name'] = $filesName;
             }
          }
      }
      return $this->json($data);
    }

    public function requestData($field){
      if($this->requestStack->getCurrentRequest()->getMethod() == "POST"){
          $data = $this->requestStack->getCurrentRequest()->request->all();
      }
      else if($this->requestStack->getCurrentRequest()->attributes->get('_route_params')){
        $data =  $this->requestStack->getCurrentRequest()->attributes->get('_route_params');
      }
    
      else{
        $data = $this->requestStack->getCurrentRequest()->query->all();
      }
      return isset($data[$field]) ? $data[$field] : null;
  }
    public function jsonAddFile($filesPath){
      if(file_exists($filesPath)){
            $file = file_get_contents($filesPath);
            $jsonDataToArray = json_decode($file,true);
            foreach($jsonDataToArray as $item){
              $products = new Products();
              $products->setUsername($item['name']);
              $products->setScreenName($item['username']);
              $products->setCreatedDate(time());
              $products->setMake($item['make']);
              $products->setModel($item['model']);
              $products->setYear($item['year']);
              $products->setFuelType($item['fuel']);
              $products->setContent($item['title']);
              $products->setDescription($item['content']);
              $products->setTweetId($item['product_id']);
              $products->setImage($item['product_image']);
              $products->setLocation($item['location']);
              $this->doctrineManager->getManager()->persist($products);
            }
            $this->doctrineManager->getManager()->flush();
            @unlink($filesPath);      
      }
    }  

    

      
    #[Route('user/change-password', name: 'change_password',methods:['GET','POST'])]
    public function change_password(UserPasswordHasherInterface $userPasswordHasherInterface):Response{
     $data = [];
     $method = $this->requestStack->getCurrentRequest()->getMethod();
     $form = $this->createForm(ChangePasswordFormType::class);
     $form->handleRequest($this->requestStack->getCurrentRequest());
     if($method == "POST"){
       if($form->isSubmitted() && $form->isValid()){
         try{
          $user = $this->container->get('security.token_storage')->getToken()->getUser();
          $user = $user->setRoles(['ROLE_USER']);
          $user->setPassword($userPasswordHasherInterface->hashPassword($user,$form->getData()['password']));
          $this->entityManager->getManager()->persist($user);
          $this->entityManager->getManager()->flush();
          $data['success'] = true;
          $data['message'] = 'The password is updated';
         }
         catch(Exception $e) {
           $data['success'] = false;
         }
       }
       else{
          $errors =  $form->getErrors(true);
          foreach($errors as  $value){
             $data['errors'][] =  $value->getMessage();

          }
       }
    
    return $this->json($data);

 }


  
}
    
    

   

      
}

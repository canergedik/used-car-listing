<?php
namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use App\Form\RegisterFormType;
use Symfony\Component\Security\Core\Security;
use Twig_Environment;
use Doctrine\ORM\Tools\Pagination\Paginator;
use App\Entity\Products;
use App\Form\ChangePasswordFormType;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;

#[Route('/web', name: 'web_')]
class MemberController extends AbstractController
{
    private $doctrineManager;
    private $requestStack;
    public $security;
    private $pageSize = 20 ;
    public function __construct(ManagerRegistry $doctrineManager,RequestStack $requestStack,Security $security,Twig_Environment $twig){
         $this->doctrineManager = $doctrineManager;
         $this->requestStack = $requestStack;
         $this->security = $security;
        }

    #[Route('/register', name: 'member')]
    public function userCreate(UserPasswordHasherInterface $passwordHasherInterface ): Response
    {
       $data = array();
       $form = $this->createForm(RegisterFormType::class);
        if($this->requestStack->getCurrentRequest()->getMethod()  == 'POST' ){
            $form = $this->createForm(RegisterFormType::class);
            $form->handleRequest($this->requestStack->getCurrentRequest());
                if($form->isSubmitted() && $form->isValid()){
                    $user =  new User();
                    $user->setEmail(   $form->getData()['email']);
                    $hashPassword = $passwordHasherInterface->hashPassword($user,$form->getData()['password']);
                    $user->setPassword($hashPassword);
                    $user->setApiKey($form->getData()['email'].$hashPassword);
                    $this->doctrineManager->getManager()->persist($user);
                    $this->doctrineManager->getManager()->flush();
                    $this->addFlash('success','Kullanıcı kaydı başarılı bir şekilde oluşturulmuştur');
                    return $this->redirectToRoute('web_member');
            }
            else {
                $formErrors = $form->getErrors(true);
                if($formErrors){
                    foreach($formErrors as $errors){
                     $data['errors'][] = $errors->getMessage();
                    }
                }
            }
        }
        $data['form'] = $form->createView();
        return $this->render('member/register.html.twig',$data);
    }
    

    #[Route('/auth', name: 'auth',methods:['GET','POST'])]
    public function web_auth(): JsonResponse
    {
      return $this->json([]);
    }
    
    
    #[Route('/login', name: 'login',methods:['GET','POST'])]
    public function login(): Response
    {
      if(!$this->security->getUser()){
        return $this->render('member/login.html.twig', [
            'data' => $this->security->getUser() 
        ]);
      };
      return $this->redirectToRoute('web_listing');
    }
     #[Route('/change-password', name: 'change_password')]
     public function changePassword(UserPasswordHasherInterface $userPasswordHasherInterface): Response{
      $form = $this->createForm(ChangePasswordFormType::class);
      $data = array();
      if($this->requestStack->getCurrentRequest()->getMethod()  == "POST"){
        $form->handleRequest($this->requestStack->getCurrentRequest());
        $formErrors = $form->getErrors(true);
        if($formErrors){
            foreach($formErrors as $errors){
             $data['errors'][] = $errors->getMessage();
            }
        }
        if($form->isSubmitted() && $form->isValid()){
          try{
           $user = $this->container->get('security.token_storage')->getToken()->getUser();
           $user = $user->setRoles(['ROLE_USER']);
           $user->setPassword($userPasswordHasherInterface->hashPassword($user,$form->getData()['password']));
           $this->doctrineManager->getManager()->persist($user);
           $this->doctrineManager->getManager()->flush();
           
           return $this->json(['status'=>200,'success'=>True]);
          }
          catch(Exception $e) {
            return $this->json(['status'=>400,'success'=>False]);
          }
        }
  }
  return $this->render('admin/change_password.html.twig',['form'=>$form->createView()]);
}


#[Route('/edit')]
public function edit(): Response{
    $datas = array();
    $page = $this->requestStack->getCurrentRequest()->get('page',1);
    if($this->requestStack->getCurrentRequest()->isXmlHttpRequest()){
        $query = $this->requestStack->getCurrentRequest()->get('response')['query'];
        $data = $this->doctrineManager
       ->getRepository(Products::class)
       ->createQueryBuilder('u')
       ->where('u.bio LIKE :bio')
       ->setParameter('bio', "{$query}%")->setMaxResults(12)
       ->orderBy('u.created_date','desc');
    }
    else{
      $data = $this->doctrineManager->getRepository(Products::class)->createQueryBuilder('products')->orderBy('products.created_date','desc');
    }
    $paginator = new Paginator($data->getQuery(), $fetchJoinCollection = true);
    $totalItems = count($paginator);
    $pagesCount = ceil($totalItems / $this->pageSize);
    $result = $data->setFirstResult($this->pageSize * ($page-1))->setMaxResults($this->pageSize)->getQuery()->getResult(Query::HYDRATE_ARRAY); 
    $datas['data'] = $result;
    $datas['totalPage'] = $pagesCount;
    if($this->requestStack->getCurrentRequest()->isXmlHttpRequest()){
      return $this->json(['response'=>$this->render('common/edit-data.html.twig',$datas)->getContent()]);
    }
    return $this->render('admin/remove-datas.html.twig',$datas);
}


#[Route('/remove',methods:['POST'])]
public function removeMarketPlaceData(){
    $response = array();
    $data  = $this->doctrineManager->getManager()->getRepository(Products::class)->findOneBy(['id_str'=>$this->requestData('data-id')]);
    $response['success'] = false;
    if($data){
        $this->doctrineManager->getManager()->remove($data);
        $this->doctrineManager->getManager()->flush();
        $response['success'] = true;
        $response['messages'] = 'The data is deleted';
    }
    return $this->json($response);
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
}

<?php
namespace App\EventSubscriber;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Twig\Environment;


class EventSubscriber implements EventSubscriberInterface{
  private $enviroment;
  private $doctrineManager;
  public function __construct(Environment $enviroment,ManagerRegistry $managerRepository)
  {
      $this->enviroment = $enviroment;
      $this->doctrineManager = $managerRepository;
      
  }

   public static function getSubscribedEvents():array{
       return [
           ExceptionEvent::class => ['onKernelException']
       ];


   }
   

   public function onKernelException(ExceptionEvent $event){
       $exception =  $event->getThrowable();
       $response = new JsonResponse();
       
        
       if($exception instanceof HttpException ){
         
            if($exception->getStatusCode() == 401){
                if(preg_match("/api\/v1/",$event->getRequest()->getRequestUri())){
                $response->setData(['errors'=>'401 unauthorized']);
                $event->setResponse($response);
               
            }
        }
            else if($exception->getStatusCode() == 404 && preg_match("/web/",$event->getRequest()->getRequestUri())){
                $response = new Response($this->enviroment->render("admin/404.html.twig"));
                $event->setResponse($response);
                
            }

            else if($exception->getStatusCode() == 401 && preg_match("/web/",$event->getRequest()->getRequestUri())){
                $response = new Response($this->enviroment->render("admin/404.html.twig"));
                $event->setResponse($response);
                
            }

            else if($exception->getStatusCode() == 403 && preg_match("/web/",$event->getRequest()->getRequestUri())){
                $response = new Response($this->enviroment->render("admin/404.html.twig"));
                $event->setResponse($response);
                
            }

            else if($exception->getStatusCode() == 405 && preg_match("/api/",$event->getRequest()->getRequestUri())){
                $response = new JsonResponse();
                $event->setResponse($response->setData(['errors'=>'405 method is not allowed']));
                
            }

    
    }

   }


}
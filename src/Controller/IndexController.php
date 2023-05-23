<?php
namespace App\Controller;
use App\Configs\Pager;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

#[Route('/web', name: 'web_')]
class IndexController extends AbstractController
{
    public $page;
    public $q;
    public $requestStack;
    public $doctrineManager;
    public static $pageSize = 50;
    public $price_min;
    public $price_max;
    public $year;
    public $make;
    public $model;
    public $createSqlQuery;
    public $security;
    public function __construct(RequestStack $requestStack, ManagerRegistry $managerRegistry,Security $security  ){
        $this->requestStack = $requestStack;
        $this->doctrineManager = $managerRegistry;
        $this->security = $security;
    }
    public function setVariable(){
        $this->q = $this->requestData('q');
        $this->page =  $this->requestData('page') ?? 1;
        $this->make = $this->requestData('make');
        $this->year = $this->requestData('year');
        $this->model = $this->requestData('model');
        $this->price_min = $this->requestData('price_min');
        $this->price_max = $this->requestData('price_max');
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
  public function multipleQuery($item){
    $queryİtem = '(';
    $item = explode('_',$item);
      foreach($item as $value ){
        $queryİtem .= "'$value'".($value != end($item) ? ', ' : '') ;
      }
    $queryİtem .= ')';
    return $queryİtem;
  }
   public function modelQuery($item){
     $item =    explode('___',$item);
     $modelDatas = [];
     if(is_array($item)){
        foreach($item as $value){
            $model = explode('__',$value);
            $modelDatas[$model[0]][] =  $model[1];
        }
     }
     return $modelDatas;
   }
 

  public function createSearchQuery($query = 'SELECT * FROM products'){
    $this->setVariable();
    $this->createSqlQuery =  $query;
    if(isset($this->make)){
       if(preg_match('/\_/',$this->make)){
        $this->createSqlQuery .= ' WHERE make IN  '.$this->multipleQuery($this->make);
      }
       else{
        $this->createSqlQuery .= ' WHERE make="'.$this->make.'"';
       }
    } 

    if(isset($this->model)){
        $modelData = $this->modelQuery($this->model);
        $modelCount = 1;
        foreach($modelData as $key => $item){
           $this->createSqlQuery = str_replace(''.$key.'','',$this->createSqlQuery);
           $this->createSqlQuery  .= ' OR  make="'.$key.'" and model IN '.$this->multipleQuery(implode('_',$item)). ($modelCount < count($modelData)  ? '': ' ');
           $modelCount += 1;
          }
       }
    if(isset($this->year)){
      $this->createSqlQuery .= 'AND year ="'.$this->year.'"';
    }

    if(isset($this->price_min)){
      $this->createSqlQuery .= 'AND price_min > "'.$this->price_min.'"';
    }
    if(isset($this->price_max)){
      $this->createSqlQuery .= 'AND price_max < "'.$this->price_max.'"';
    }

    if(!preg_match("/dataCount/",$this->createSqlQuery)){
      if(isset($this->page)){
        $this->createSqlQuery .=   " ORDER BY created_date DESC  LIMIT ".self::$pageSize." OFFSET ".($this->page == 1 ? "0" : self::$pageSize*($this->page-1));
      }
    }   
    return $this->createSqlQuery;
  }

  public function getSearchFilter(){
    $this->createSearchQuery();
    $datas = array();
    $queryMake = $this->multipleQuery($this->make);
    $sql = 'SELECT COUNT(model) as model_count, make,model FROM products WHERE make IN '.$queryMake.' GROUP BY model';
    $modelsList = $this->doctrineManager->getConnection()->prepare($sql)->execute()->fetchAll();
    $makeUnique =  array_unique(array_column($modelsList, 'make'));
    foreach($makeUnique as $make){
         foreach($modelsList as $modelMakeName){
              if($make == $modelMakeName['make']){
                $datas[$make][] = $modelMakeName['model'];
              }
         }
    }
    return $this->json($datas);
  }    public function index(Pager $pager): Response
    {  
       $datas = array();
       $q = $this->q ? $this->q.'/'  : '';
       $data = $this->doctrineManager->getConnection()->prepare($this->createSearchQuery())->execute()->fetchAll();
       $dataCount = $this->doctrineManager->getConnection()->prepare($this->createSearchQuery("SELECT count(*) as dataCount FROM products"))->execute()->fetchAll();
       $makeList = $this->makeList();
       $make =  array_unique(array_column($makeList, 'make'));
       $pagesCount = ceil($dataCount[0]['dataCount'] / self::$pageSize);
       $datas['data'] = $data;
       $datas['makes'] = $make;
       $datas['pager'] = $pager->pagination($pagesCount,$this->page,$q);
       $datas['count'] = $dataCount;
       if($this->requestStack->getCurrentRequest()->isXmlHttpRequest()){
        return  $this->json(['pager'=>$datas['pager'],'response' => $this->render('admin/listing_data.html.twig',$datas)->getContent()]);
       }
       return  $this->render('admin/index.html.twig',$datas);
      }
    public function makeList(){
        $sql = "SELECT COUNT(model) AS model_count,make,model FROM products GROUP BY make,model";
        $makes = $this->doctrineManager->getConnection()->prepare($sql)->execute()->fetchAll();
        return $makes;
    }

}

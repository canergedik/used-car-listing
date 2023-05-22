<?php

namespace App\Tests;

use App\Configs\Pager;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;



class IndexControllerTest extends WebTestCase
{

    public $q;
    public $entityManager;
    public $createSqlQuery;

    public $make;

    public $model;

    public $price_max;


    public $price_min;

    public $year;

    public $page;

    public $client;
    
    private $pager;

    private $dataCount;

    private $datas = [];

    private $data;



    public static $pageSize = 20;

    public function setUp():void{
        $this->client = static::createClient([],['HTTP_HOST'=>"localhost"]);

        $this->client->request('GET', '/');
        $kernel = self::bootKernel();
        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $this->entityManager = static::$kernel->getContainer()->get('doctrine');

    }

 
    public function requestData($field){

        if($this->client->getRequest()->getMethod() == "POST"){
            $data = $this->client->getRequest()->request->all();
        }
        else if($this->client->getRequest()->attributes->get('_route_params')){
          $data =  $this->client->getRequest()->attributes->get('_route_params');
        }
      
        else{
          $data = $this->client->getRequest()->query->all();
        }
        return isset($data[$field]) ? $data[$field] : null;
  }


  public function multipleQuery($item){
        $queryİtem = '(';
        $b = explode('+',$item);
        foreach($b as $value ){
            $value = trim($value);
            $queryİtem .= "'$value',";
        }
         $queryİtem .= ')';
         $queryİtem = str_replace(',)',')',$queryİtem);
         return $queryİtem;
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


    public function craeteSearchQuery($query = 'SELECT * FROM products'){
        $this->setVariable();
        $this->createSqlQuery =  $query;
        if(isset($this->make)){
           if(preg_match('/\+/',$this->make)){
            $this->createSqlQuery .= ' WHERE make IN  '.$this->multipleQuery($this->make);
           }
           else{
            $this->createSqlQuery .= ' WHERE make="'.$this->make.'"';
           }
        }
        if(isset($this->model)){
          if(preg_match('/\+/',$this->model)){
            $this->createSqlQuery .= ' WHERE model IN  '.$this->multipleQuery($this->model);
           }
          else{
            $this->createSqlQuery .= 'AND model="'.$this->model.'"';
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
    
    
    public function testIndex():void{
      $this->dataListing();
       $this->assertTrue(count($this->data) > 0);
       $this->dataCount();
       $this->makeList();
       $this->pager();
       $this->allData();

    }

    public function dataListing(){

      $data = $this->entityManager->getConnection()->prepare($this->craeteSearchQuery())->execute()->fetchAll();
      $this->assertIsArray($data);
      $this->data = $data;
      $this->datas['data'] = $data;

    }

    public function dataCount(){
        $dataCount = $this->entityManager->getConnection()->prepare($this->craeteSearchQuery("SELECT count(*) as dataCount FROM products"))->execute()->fetchAll();
        $this->assertIsArray($dataCount);
        $this->assertArrayHasKey('dataCount',$dataCount[0]);
        $this->assertIsInt($dataCount[0]['dataCount']);
        $this->dataCount = $dataCount[0]['dataCount'];
        $this->datas['dataCount'] = $this->dataCount;

       
    }

    public function makeList(){
            $sql = "SELECT COUNT(model) AS model_count,make,model FROM products GROUP BY make,model";
            $makes = $this->entityManager->getConnection()->prepare($sql)->execute()->fetchAll();
            $this->assertIsArray($makes);
            $this->assertTrue(count($makes)>1);
            $this->assertArrayHasKey('model_count',$makes[0]);
            $this->assertArrayHasKey('make',$makes[0]);
            $this->assertArrayHasKey('model',$makes[0]);
            $this->datas['make'] = $makes;
            
    }
    public function pager(){
      $pager = new Pager();
      $pager = $pager->pagination($this->dataCount,$this->page,$this->q ?? '/');
      $this->assertStringContainsString('listing',$pager);
      $this->pager = $pager;
      $this->datas['pager'] = $this->pager;
    }
    public function allData(){
      $this->assertArrayHasKey('make',$this->datas);
      $this->assertArrayHasKey('pager',$this->datas);
      $this->assertArrayHasKey('dataCount',$this->datas);
      $this->assertArrayHasKey('data',$this->datas);
    }
}

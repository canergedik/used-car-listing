<?php

namespace App\Tests;

use App\Entity\Products;
use App\Service\FileUploader;
use Doctrine\ORM\Query;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\Multipart\FormDataPart;




class MemberControllerTest extends WebTestCase
{
    private $entityManager;
    private $client;

    private $datas = [];

    private $dataListing;
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


  
    public function testAddFile(){
        
        $file = new UploadedFile(
            // Path to the file to send
            __DIR__.'/../public/files/data.json',
            // Name of the sent file
            'data.json',
            // MIME type
            'application/json',
            // Size of the file
        );
        $crawler = $this->client->request('GET','/web/admin');
        $this->assertResponseIsSuccessful();
        $form = $crawler->filter('form[name="file_upload_form"]')->form();
        $form['file_upload_form[name]']->setValue('json add');
        $form['file_upload_form[description]']->setValue('json car data add');
        $form['file_upload_form[files]']->upload($file);
        $form->getFiles();
        $this->client->submit($form); 
} 

  public function  testJsonAddFile(){
              $filesPath = __DIR__.'/../public/files/data.json';
              $this->assertNotNull($filesPath);
              $file = file_get_contents($filesPath);
              $jsonDataToArray = json_decode($file,true);
              foreach($jsonDataToArray as $item){
                $products = new Products();
                $products->setUsername($item['name']);
                $products->setScreenName($item['name']);
                $products->setCreatedDate(time());
                $products->setMake($item['make']);
                $products->setModel($item['model']);
                $products->setYear($item['year']);
                $products->setFuelType($item['fuel']);
                $products->setContent($item['title']);
                $products->setDescription($item['title']);
                $products->setTweetId($item['product_id']);
                $products->setImage($item['product_image']);
                $products->setLocation('dssd');
                $this->entityManager->getManager()->persist($products);
              }
              $this->entityManager->getManager()->flush();
              //@unlink($filesPath);
              $this->assertNotNull(file_exists($filesPath));
              
        }

        public function testEdit(){
            $this->client->request('POST','test-edit-listing',['response'=>['query'=>'ford']]);
            $query = $this->client->getRequest()->get('response')['query'];
            $this->assertNotNull($query);
            $this->editDataListing($query);
           
        }
        public function editDataListing($query){
             $this->dataListing = $this->entityManager
            ->getRepository(Products::class)
            ->createQueryBuilder('u')
            ->where('u.bio LIKE :bio')
            ->setParameter('bio', "{$query}%")->setMaxResults(12)
            ->orderBy('u.created_date','desc')
            ->getQuery()->getResult(Query::HYDRATE_ARRAY);
             $this->assertIsArray($this->dataListing);
        }

        public function testRemove(){
            $response = array();
            $this->client->request('POST','/test-remove',['data_id'=>'1']);
            $data  = $this->entityManager->getManager()->getRepository(Products::class)->findOneBy(['id'=>$this->requestData('data_id')]);
            $this->assertNotNull($data);
            $this->entityManager->getManager()->remove($data);
            $this->entityManager->getManager()->flush();
            $response['success'] = true;
            $response['messages'] = 'ilan başanlı bir şekilde silindi';
            $this->assertTrue($response['success'] == true);
        }

        
      }

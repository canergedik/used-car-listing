<?php

namespace App\Configs;

class Pager {
    private $total_pages;
    
    private $next_page;
    private $last_page;
    private $page;
    private static $pagePrefix =  '';


   public function currentPage():string{
    return $this->page;
   }
   
   public function pagination(int $total_pages,int $page,$q=''){
       self::$pagePrefix =  $_SERVER['SERVER_NAME'] == 'localhost' ?  '/used-car-listing/public' : ''; 
    
       $pagination_url= '';
       if($page>=2)  $pagination_url.= "<li> <a href='".self::$pagePrefix."/web/admin/listing/$q".($page-1)."'>  Prev </a></li>";   
       for($i=1; $i<=$total_pages; $i++)
       {
            if($page==$i){
               $pagination_url .= '<li class="active"><a href="'.self::$pagePrefix.'/web/admin/listing/'.$q.$i.'"></a>'.$page.'</li>';
            }
           else if($i<=5){
            $pagination_url .= "<li><a href='".self::$pagePrefix."/web/admin/listing/$q".$i."'>$i</a></li>";
           }

       }
        if($page<$total_pages){   
            $pagination_url.= "<li><a href='".self::$pagePrefix."/web/admin/listing/$q".($page+1)."'> Next </a></li>";   
        }   
       return $pagination_url;
    }
      

}
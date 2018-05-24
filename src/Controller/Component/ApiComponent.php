<?php 
namespace App\Controller\Component;

use Cake\Controller\Component;

class ApiComponent extends Component{
  
    private $api_url = 'http://api.openweathermap.org/data/2.5/';
    private $api_key = '858fc59147f93c9557979d5a5680d7dd';

    public function __construct(){
        
    }
  
    public function searchByCity($city){
          $url = $this->api_url.'weather?q='.$city.'&APPID='.$this->api_key;
          $ch = curl_init($url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
          try {
              $response = curl_exec($ch);
              curl_close($ch);
              return $response;
          } catch (\Exception $e) {
              return $e;
          }
    }
}
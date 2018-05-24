<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class WeatherController extends AppController{
    public function initialize(){
        parent::initialize();
    }
    
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }
    
    public function index(){
        $this->loadComponent('Api');
        
        if($this->request->is('post')){
           $data = $this->request->getData();
            
           if(isset($data['search']) && !empty($data['search'])){ 
                $search = trim($data['search']);
                $response = $this->Api->searchByCity($search);
                    
                $data = json_decode($response, true);
                $data['main']['celsius'] = ($data['main']['temp'] - 273.15);
                $data['main']['celsius_max'] = ($data['main']['temp_max'] - 273.15);
                $data['main']['celsius_min'] = ($data['main']['temp_min'] - 273.15);
               
               
                //imgs http://openweathermap.org/img/w/$data['weather'][0]['icon'].png
                $arr_weather = [
                    "clear sky" => 'Céu Limpo',
                    "few clouds" => 'Poucas Nuvens',
                    "scattered clouds" => 'Nuvens dispersas',
                    "broken clouds" => 'Nuvens dispersas',
                    "shower rain" => 'Garoa',
                    "rain" => 'Chuva',
                    "thunderstorm" => 'Tempestade',
                    "snow" => 'Neve',
                    "mist" => 'Nevoeiro',
                ];
               
               $this->set('data', $data);
               $this->set('arr_weather', $arr_weather);
           }
        }
    }
  
}
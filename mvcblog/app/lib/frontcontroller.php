<?php
namespace PHPMVC\LIB;



class   FrontController
{git
    const NOT_FOUND_CONTROLLER = 'NotfoundController';
    private $_controller = 'index';
    private $_action = 'default';
    private $_param = [];
    private $_adminpanel;
    public function __construct()
    {
        $this->getUrl();
    }
    public function getUrl(){
        $url = parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
        $checkUrl = explode('/',trim($url,"/"),5);
        if(isset($checkUrl[2]) && $checkUrl[2] !== 'admin'){
            $url = explode('/',trim($url,"/"),5);
            if(isset($url[2])&& $url[2]!= null){
                $this->_controller = $url[2];
            } 
            if(isset($url[3])&& $url[3]!= null){
                $this->_action = $url[3];
            }
            if(isset($url[4])&& $url[4]!= null){
               $this->_param = explode('/',$url[4]);
            }

        }
        if(isset($checkUrl[2]) && $checkUrl[2] == 'admin'){
            $url = explode('/',trim($url,"/"),6);
            if($url[2] == 'admin'){
                $this->_adminpanel = $url[2];
            }
            if(isset($url[3])&& $url[3]!= null){
                $this->_controller = $url[3];
            } 
            if(isset($url[4])&& $url[4]!= null){
                $this->_action = $url[4];
            }
            if(isset($url[5])&& $url[5]!= null){
               $this->_param = explode('/',$url[5]);
               
               
            }

        }
       
    }
    public function dispatchUrl(){
        if(!empty($this->_adminpanel)){
            $Controller = 'PHPMVC\Controllers\Adminpanel\\'. ucfirst($this->_controller).'Controller';

        }else{
            $Controller = 'PHPMVC\Controllers\\'. ucfirst($this->_controller).'Controller';
        }
       
        $Action = $this->_action.'Action';
        
        if(!class_exists($Controller)){
            $Controller = 'PHPMVC\Controllers\\'.self::NOT_FOUND_CONTROLLER;
        }
        $ControllerName = new $Controller();

        if(!method_exists($ControllerName,$Action)){
            $Action = "notfoundAction";

        }

        call_user_func_array([$ControllerName,$Action],$this->_param);
     

    }

}
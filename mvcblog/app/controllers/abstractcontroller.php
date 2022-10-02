<?php
namespace PHPMVC\Controllers;

class AbstractController {
   /*  protected $_controller;
    protected $_action;
    protected $_param = []; */

    protected $data = [];
    public function notfoundAction(){
        $this->_view('errors/404');
       
    }
/* 
    public function setController($controller){
        $this->_controller = $controller;
    }
    public function setAction($Action){
        $this->_action = $Action;
    }
    public function setParams($Params){
        $this->_param = $Params;
    } */



    public function _models($namemodel){
        if(file_exists(APP_MODEL.DS.$namemodel.'model.php')){
           
            require_once APP_MODEL.DS.$namemodel.'model.php';
              $classmodel = 'PHPMVC\Models\\'.ucfirst($namemodel).'model';
           return new $classmodel;
        }else{
            include APP_VEIW.DS.'errors/403.view.php';
            die();
        }

       /*  require_once APP_MODEL.DS.$namemodel.'controller.php'; */
        
    }

    public function _view($viewFole,$data = []){
       
    
       if(file_exists(APP_VEIW.DS.$viewFole.'.view.php')){
               include APP_VEIW.DS.$viewFole.'.view.php';
       }else{
        include APP_VEIW.DS.'errors/404.view.php';
       }
    }

}
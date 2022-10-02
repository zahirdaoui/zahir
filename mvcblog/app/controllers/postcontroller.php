<?php
namespace PHPMVC\Controllers;



class PostController extends AbstractController{

    public $model;

   public function __construct()
    {
        $this->model = $this->_models("posts");    
    }
    public function indexAction($id){
        
    }
    public function defaultAction(){
        
        $datar = $this->model->pagination();
        extract($datar);
        echo $NumberPages;
       /*  echo '<h1> your id is '.$data["NumberPages"].'  your name is '.$data["data"][0]["f_name"].'</h1>'; */

       var_dump($data[0]["f_name"]);

        
    }
    public function editAction(){
        
        $this->model->edit();
        
    }
}
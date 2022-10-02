<?php
namespace PHPMVC\Controllers\Adminpanel;
use PHPMVC\Controllers\AbstractController;
use PHPMVC\Helper\Help;


class IndexController extends AbstractController
{
  
    use Help;

    public function __construct()
    {
        $this->modelPost = $this->_models('posts');
        $this->modelComment = $this->_models('comment');
        $this->Auth();
    }


    public function defaultAction(){
         
       $data = [
        'countPosts' =>$this->modelPost->rowCount(),
        'countComment' => $this->modelComment->rowCount(),
        'allBlog' => $this->modelPost->gettAll(),
       ];
        $this->_view("adminpanel/defaoult",$data);
        
    }
    public function showdataAction(){
        $data = [
            'allBlog' => $this->modelPost->gettAll(),
           ];
        $this->_view("adminpanel/table",$data);
    }

    public function deletepostAction($id){
        if($this->modelPost->deletePost($id)){
            die("post deleted");
        }else{
            die('somme thing is wrong');
        }

    }


}
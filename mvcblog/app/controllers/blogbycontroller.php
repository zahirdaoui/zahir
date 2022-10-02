<?php
namespace PHPMVC\Controllers;
use PHPMVC\Controllers\IndexController;
class BlogbyController extends AbstractController
{
    
    public function __construct()
    {
        $this->modelPost = $this->_models('posts');
        $this->modeltag = $this->_models('tags');
        $this->modeltagPost = $this->_models('poststag');
        $this->modelcate = $this->_models('category');
        $this->modelcomment = $this->_models('comment');
        $this->allblog = new IndexController();
    }
    public function defaultAction(){
        
        $this->allblog->allblogsAction(1);
        
        /* $Posts = $this->modelPost->getLatestPostByCategory('News',1);
        $data = [
            'posts' => $this->modelPost->getLatestPostByCategory('Android',3),
        ];
        $this->_view("userviews/defaoult",$data); */
        
    }
    public function posts_catagoryAction($category =''){

        if($category == ''){
            $this->allblog->allblogsAction(1);
        }else{
            $category = ucfirst($category);
            $data = $this->modelPost->getpostsByCaterogy($category);
             $this->_view('userviews/blogsfilter',$data);
        }
    }
    public function posts_tagsAction($tags =''){

        if($tags == ''){
            $this->allblog->allblogsAction(1);
        }else{

             $data = $this->modelPost->getpostsByTags($tags);
            
             $this->_view('userviews/blogsfilter',$data);
        }
    }
}
<?php
namespace PHPMVC\Controllers;
class IndexController extends AbstractController
{
    public function __construct()
    {
        $this->modelPost = $this->_models('posts');
        $this->modeltag = $this->_models('tags');
        $this->modeltagPost = $this->_models('poststag');
        $this->modelcate = $this->_models('category');
        $this->modelcomment = $this->_models('comment');
    }
    public function defaultAction(){
        $Android = $this->modelPost->getLatestPostByCategory('Android',3);
        $Windows = $this->modelPost->getLatestPostByCategory('Windows',3);
        $News = $this->modelPost->getLatestPostByCategory('News',1);
        $data = [
            'android' => $this->modelPost->getLatestPostByCategory('Android',3),
            'windows' => $Windows,
            'news' => $News
        ];
        $this->_view("userviews/defaoult",$data);
        
    }
    public function aboutusAction(){
        $this->_view('userviews/aboutus');
    }
    public function contactusAction(){
        $this->_view('userviews/contactus');
    }
    public function blogAction($id){
        $data =
        [
            "post" =>$this->modelPost->getpostByid($id),
            "tags" =>$this->modeltag->gettTagsByPost($id),
            "mosttaguse" =>$this->modeltag->mustTagUse(),
            "latestposts" =>$this->modelPost->geteLatestPst(5),
            "comments" => $this->modelcomment->gettCommentByPost($id),
            "username" => '',
            "comment" => '',
            "username_err"=>'',
            "comment_err"=>'',
        ];
       if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        
            
                
                $data['username'] = $_POST['username'];
                $data['comment'] = $_POST['comment'];
                /* die($data['username']); */
                if(empty($data['username'])){ $data['username_err'] = 'the user name is requered'; }
                if(empty($data['comment'])){ $data['comment_err'] = 'the comment is requered ';}
                if(empty($data['username_err']) && empty($data['comment_err'])){
                    if($this->modelcomment->insertComment($data['username'],$data['comment'],$id)){
                        die('comment add success');
                    }else{
                        die('some thoing is wrong');
                    }

            }
           
        }

        $this->_view('userviews/blog',$data);
    }
   public function addcommentAction($usernam,$comment,$id_post){
        if($this->modelcomment->insertComment($usernam,$comment,$id_post)){
           return true;
        }else{
           return false;
        }
    }
    public function allblogsAction($page=1){
        $data = 
        $data = [
            "posts" =>$this->modelPost->papPosts($page),
            "mosttaguse" =>$this->modeltag->mustTagUse(),
            "latestposts" =>$this->modelPost->geteLatestPst(5),
        ];
        $this->_view('userviews/allblogs',$data);
    }
    
   
}
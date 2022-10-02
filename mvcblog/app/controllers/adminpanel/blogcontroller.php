<?php
namespace PHPMVC\Controllers\Adminpanel;
use PHPMVC\Controllers\AbstractController;
use PHPMVC\Helper\Help;


class BlogController extends AbstractController
{
    use Help;


    public function __construct()
    {
        $this->modelPost = $this->_models('posts');
        $this->modeltag = $this->_models('tags');
        $this->modeltagPost = $this->_models('poststag');
        $this->modelcate = $this->_models('category');
        $this->Auth();
    }

    public function defaultAction(){
        
        $this->_view("adminpanel/table");
        
    }
    
    public function addAction(){
        $datacate = $this->modelcate->gettcategory();
        /* $data['categorydata'] = $datacate; */
              
        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $data = [
                'blog_title' => $_POST['blog_title'],
                'category' => $_POST['category'],
                'tags' => $_POST['tags'],
                'content' => $_POST['content'],
                'blog_title_err' =>'',
                'category_err' =>'',
                'tags_err' =>'',
                'content_err' =>'',
                'categorydata' => $datacate
            ];

            if(isset($_POST['comment_state']) && $_POST['comment_state']!=null ){
                $data['comment_state'] = $_POST['comment_state'];
            }else{
                $data['comment_state'] = 1;
            }

            if(empty($data['blog_title'])) $data['blog_title_err'] = 'title is required';
            if(empty($data['category'])) $data['category_err'] = 'category is required';
            if(empty($data['tags'])){
                $data['tags_err'] = 'tag is required';
            }else{
               $tagsFilter = explode('|',trim($data['tags']));
            }
            if(empty($data['content'])) $data['content_err'] = 'the content is required';
            if(strlen($data['content']) <16) $data['content_err'] = 'the content is then 16 lenght';
            if(isset($_FILES['blog_img'])){
                $imagename = $_FILES['blog_img']['name'];
                $data['blogimg'] = $imagename;
                move_uploaded_file($_FILES['blog_img']['tmp_name'],URL_IMG.$imagename);
            }

            if(empty($data['blog_title_err']) && empty($data['category_err']) && empty($data['tags_err']) && empty($data['content_err'])){
                $slug = "hello slug ahir";
                $postadd = $this->modelPost->addPost($data['blog_title'],$data['blogimg'],$data['comment_state'],$slug,$data['content'],$_SESSION['userId']);
                $this->modelcate->addcatpost($postadd , $data['category']);
                if($postadd>0){
                    foreach($tagsFilter as $tag){
                      $lastidtag = $this->modeltag->addtags($tag);
                      $this->modeltagPost->addposttag($postadd,$lastidtag);
                      
                    }
                    $this->back();
                }
            }
            $this->_view("adminpanel/addblog",$data);
           

        }else{
            
            $data = [
                'blog_title' => '',
                'category' => '',
                'tags' => '',
                'content' => '',
                'blog_title_err' =>'',
                'category_err' =>'',
                'tags_err' =>'',
                'comment_state_err' =>'',
                'content_err' =>'',
                'categorydata' => $datacate
            ];
            $this->_view("adminpanel/addblog",$data);
        }
       
       
       
        
    }
   
    
    public function editAction($id){
        
        $datacate = $this->modelcate->gettcategory();
        $getCatPost = $this->modelcate->gettcategoryByPost($id);
        $post = $this->modelPost->getByid($id);
        $tags = $this->modeltag->gettTagsByPost($id);
        
        if(empty($getCatPost)){
            $getCatPost['category'] = 'not difined';
        }
        
        if(!$tags){
            $this->redirect('admin/index/showdata');
            exit();
        }else{
            $tagsdam="";
            foreach($tags as $items){
                $tagsdam .= $items['name']."|";

            }
        }
        /* $data['categorydata'] = $datacate; */
              
        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $data = [
                'blog_title' => $_POST['blog_title'],
                'category' => $_POST['category'],
                'tags' => $_POST['tags'],
                'content' => $_POST['content'],
                'blog_title_err' =>'',
                'category_err' =>'',
                'tags_err' =>'',
                'content_err' =>'',
                'categorydata' => $datacate,
                'post' => $post,
                'tags_use' =>$tagsdam,
                'category_post' => $getCatPost['category']
            ];

            if(isset($_POST['comment_state']) && $_POST['comment_state']!=null ){
                $data['comment_state'] = $_POST['comment_state'];
            }else{
                $data['comment_state'] = 1;
            }

            if(empty($data['blog_title'])) $data['blog_title_err'] = 'title is required';
            if(empty($data['category'])) $data['category_err'] = 'category is required';
            if(empty($data['tags'])){
                $data['tags_err'] = 'tag is required';
            }else{
               $tagsFilter = explode('|',trim($data['tags']));
            }
            if(empty($data['content'])) $data['content_err'] = 'the content is required';
            if(strlen($data['content']) <16) $data['content_err'] = 'the content is then 16 lenght';
            if(isset($_FILES['blog_img'])){
                $imagename = $_FILES['blog_img']['name'];
                $data['blogimg'] = $imagename;
                move_uploaded_file($_FILES['blog_img']['tmp_name'],URL_IMG.$imagename);
            }

            if(empty($data['blog_title_err']) && empty($data['category_err']) && empty($data['tags_err']) && empty($data['content_err'])){
                $slug = "hello slug ahir";
                $date_update = date('Y/m/d');
                 if($this->modelPost->editPost($id,$data['blog_title'],$slug,$data['blogimg'],$data['content'])){
                    $this->modelcate->editcatpost($id,$data['category']);
                    $this->modeltag->deletetagspost($id);
                    foreach($tagsFilter as $tag){
                      $lastidtag = $this->modeltag->addtags($tag);
                      $this->modeltagPost->addposttag($id,$lastidtag);
                      }
                    
                 }
                 
                
                
                /* if($postadd){
                    foreach($tagsFilter as $tag){
                      
                      $this->modeltagPost->editTgasByPostId($id,$tag);
                      
                    }
                   
                   /*  $this->success('data add sucess');
                 
                    $this->back();
                } */
            }
            $this->_view("adminpanel/editeblog",$data);
           

        }else{
            
            $data = [
                'blog_title' => '',
                'category' => '',
                'tags' => '',
                'content' => '',
                'blog_title_err' =>'',
                'category_err' =>'',
                'tags_err' =>'',
                'comment_state_err' =>'',
                'content_err' =>'',
                'categorydata' => $datacate,
                'post' => $post,
                'tags_use' =>$tagsdam,
                'category_post' => $getCatPost['category']
            ];
           
            $this->_view("adminpanel/editeblog",$data);
        }
        
        
    }







    public function deleteAction(){
        
        $this->_view("adminpanel/addblog");
        
    }
    



}
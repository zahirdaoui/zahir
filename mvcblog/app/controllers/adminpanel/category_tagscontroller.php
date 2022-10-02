<?php
namespace PHPMVC\Controllers\Adminpanel;
use PHPMVC\Controllers\AbstractController;
use PHPMVC\Helper\Help;
use PHPMVC\Helper\Session;


class Category_tagsController extends AbstractController
{
  
    use Help;
    public function __construct()
    {
        $this->modeltag = $this->_models('tags');
        $this->modelcate = $this->_models('category');
        $this->Auth();
    }
    public function defaultAction(){
        $dataTag = $this->modeltag->gettags();
        $datacate = $this->modelcate->gettcategory();
       $data = [
            "tag_name" => '',
            "tag_name_err" => '',
            "datatag" => $dataTag,
            "datacate" => $datacate,
            "cate_name" => "",
            "cate_name_err" => '',
        ]; 
        $this->_view("adminpanel/tags_cat",$data);
        
    }

    public function addtagAction(){

        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
            $data = [
                "tag_name" => $_POST['tagname'],
                "tag_name_err" => '',
            ];
    
            if(empty($data['tag_name'])) $data["tag_name_err"] = 'the tag is required';
            if(!$this->modeltag->check('tags',$data['tag_name'])){
                $data["tag_name_err"] = 'the tag is all ready exist';
            }
    
            if(empty($data["tag_name_err"])){
                
                if($this->modeltag->addtags($data['tag_name'])){
                    $this->redirect("admin/category_tags/");
                }
            }
            $this->_view("adminpanel/tags_cat",$data);

        }else{
            $this->redirect("admin/category_tags/");
        }
    }


    public function edittagAction($id){

        $cuirrent_tag = $this->modeltag->gettagbyid($id);
        

        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
            $data = [
                "tag_name" => $_POST['tagname'],
                'current_tag' => $cuirrent_tag['name'],
                "tag_name_err" => '',
            ];
    
            if(empty($data['tag_name'])) $data["tag_name_err"] = 'the tag is required';
            if(empty($data["tag_name_err"])){
                
                if($this->modeltag->edittag($id,$data['tag_name'])){
                    $this->redirect("admin/category_tags/");
                }
            }
            $this->_view("adminpanel/edittag",$data);

        }else{
            $data = [
                "tag_name" => '',
                'current_tag' =>$cuirrent_tag['name'],
                "tag_name_err" => '',
            ];
            $this->_view("adminpanel/edittag",$data);
        }

    }

    
    public function deletetgAction($id){

        if($this->modeltag->delete('tags',$id)){
            die('tag is deleted success');

        }
    }

    
    public function addcategorierAction(){

        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
            $data = [
                "cate_name" => $_POST['cate_name'],
                "cate_name_err" => '',
            ];
    
            if(empty($data['cate_name'])) $data["cate_name_err"] = 'the categorier is required';
            if(!$this->modelcate->check($data['cate_name'])){
                $data["cate_name_err"] = 'the categorier is all ready exist';
            }
    
            if(empty($data["cate_name_err"])){
                
                if($this->modelcate->addcategories($data['cate_name'])){
                    $this->redirect("admin/category_tags/");
                }
            }
            $this->_view("adminpanel/tags_cat",$data);

        }else{
            $this->redirect("admin/category_tags/");
        }
    }

    public function editAction($id){

        $curren_category = $this->modelcate->getcategoryById($id);

        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
            $data = [
                "cate_name" => $_POST['cate_name'],
                "current_category" => $curren_category['content'],
                "cate_name_err" => '',
            ];
    
            if(empty($data['cate_name'])) $data["cate_name_err"] = 'the categorier is required';
            if(!$this->modelcate->check($data['cate_name'])){
                $data["cate_name_err"] = 'the categorier is all ready exist';
            }
    
            if(empty($data["cate_name_err"])){
                
                if($this->modelcate->editactegory($id,$data['cate_name'])){
                    $this->redirect("admin/category_tags/");
                }
            }
            $this->_view("adminpanel/editcategory",$data);

        }else{

            $data =  [
                "cate_name" => '',
                "current_category" => $curren_category['content'],
                "cate_name_err" => '',
            ];
            
            $this->_view("adminpanel/editcategory",$data);
        }


    }

    




    public function deletecategoryAction($id){
        if($this->modelcate->delete($id)){
            die('category deleted success');
        }   
    }
}
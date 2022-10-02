<?php
namespace PHPMVC\Controllers\Adminpanel;
use PHPMVC\Controllers\AbstractController;
use PHPMVC\Helper\Session;
use PHPMVC\Helper\Help;


class UsersController extends AbstractController{

    /* trait */
    use Session;
    use Help;

    private $dt;


    public function __construct()
    {
        $this->model = $this->_models('users');
        $this->Auth();

    }
    

    public function defaultAction(){
        $datausers =  $this->model->getuser('user');
        $dataadmin =  $this->model->getuser('admin');
        $data = [
             "users" => $datausers, 
              "admins" => $dataadmin,  
        ]; 
        $this->_view("adminpanel/admins",$data);
    }



    public function editadminsAction($id){

        $data =  $this->model->gettuserByid($id);
        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST")
        {
            
           

            $data += [
                "users_email" => $_POST['email'],
                "users_name" =>  $_POST['f_name'],
                "users_lname" => $_POST['l_name'],
                "users_password" => $_POST['password'],
                "users_Cpassword" => $_POST['confpassword'],
                "users_phone" => $_POST['mobile'],
                "users_rols" =>  $_POST['role'],
                'email_err' => '',
                'password_err' => '',
                'mobile_err' => '',
                'Cpassword_err' => '',
                "f_name_err" => '',
                "l_name_err" => '',
                "aggree_err" =>''
            ];


            if(empty($data['users_email'])) $data['email_err'] = 'email is a required';
            if(empty($data['users_phone'])) $data['mobile_err'] = 'mobile is a required';
            if(empty($data['users_name'])) $data['f_name_err'] = 'name is required';
            if(empty($data['users_lname'])) $data['l_name_err'] = 'last name is required';
            
            if(isset($_POST['password']) && $_POST['password'] != null){
                if(strlen($data['users_password']) <= 3) $data['password_err'] = 'minimum chars in passowrd is 8';
                if(strlen($data['users_Cpassword']) <= 3) $data['password_err'] = 'minimum chars in passowrd is 8';
                if($data['users_Cpassword'] != $data['users_password'] ) $data['Cpassword_err'] = 'please chech Confirm password is meme password';
            }
            if(isset($_FILES['imageadmin'])){
                var_dump($_FILES['imageadmin']);
                $imagename = $_FILES['imageadmin']['name'];
             if($this->model->insertimage($id,$imagename)){
                if (file_exists(URL_IMG.$data['img'])) 
                {
                  unlink(URL_IMG.$data['img']); 
               }
                    move_uploaded_file($_FILES['imageadmin']['tmp_name'],URL_IMG.$imagename);
                } 
               
                
                
            }
            if(empty($data['email_err']) &&
             empty($data['f_name_err']) &&
              empty($data['mobile_err'])  && 
              empty($data['f_name_err'])  &&
               empty($data['l_name_err']) &&
               empty($data['password_err']) &&
               empty($data['Cpassword_err'])){

                   if($this->model->upadteuser($id,$data['users_name'],$data['users_lname'],$data['users_email'],$data['users_phone'] , $data['users_rols'])) {
                       $this->redirect("admin/users/");
                    }  
                    if(isset($data['users_password']) && $data['users_password'] != null){

                       if($this->model->updatepassword($id,$data['users_password'])) 
                        {
                            die('PASSWORD CHANGE SUCCESS');

                        }
                    }


            }
            
            
            /* if($this->model->getuserbyemail($data['email'])){
                $data['email_err'] = 'email all ready register plaese login';
            } */
            $this->_view("adminpanel/accountadmins",$data);

        }
        $this->_view("adminpanel/accountadmins",$data);
        
    }

    public function deleteAction($id){

        $this->model->deletedbyid('users_rol',$id);
        if($this->model->deletedbyid('users',$id)){
            die('user deledet success');
        }else{
            die('user dosent deleted');
        }
        
    }

    public function adminroleAction($id){
        $this->model->editrols(1 ,$id);
        if($this->model->editrols(1 ,$id)){
            die('role user update success');
        }else{
            die('id or user not found');
        }
    }

    public function switchadminAction($id){
        $this->model->editrols($role = 1 ,$id);
    }

    public function switchAction(){
        
        $this->_view("adminpanel/addblog");
        
    }
    public function myaccountAction(){
        
        $this->_view("adminpanel/account");
    }

}

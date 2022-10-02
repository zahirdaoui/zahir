<?php

namespace PHPMVC\Controllers\Adminpanel;

use PHPMVC\Controllers\AbstractController;
use PHPMVC\Helper\Help;
use PHPMVC\Helper\Session;
class UserController extends AbstractController {
    use Session;
    use Help;

    public function __construct()
    {
       $this->model = $this->_models('users');
       $this->startSession();
    }

    private function redirectuser(){
        if(isset($_SESSION['userId']) && $_SESSION['userId'] != null){
           return $this->back();
        }
    }

    public function defaultAction(){
        $this->redirectuser();
        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
                $data = [
                    "email" => $_POST["email"],
                    "password" => $_POST["password"],
                    'email_err' => '',
                    'password_err' => ''
                ];
                
                $datauserpasse = $this->model->getuserbyemail($data['email']);

                if(empty($data['email'])) $data['email_err'] = 'email is a required';
                if(empty($data['password'])) $data['password_err'] = 'password is required';
                if(!empty($data['email'])){
                    if(!$datauserpasse){
                        $data['email_err'] = 'email is not register';
                    }
                }
                

                if(empty($data["email_err"]) && empty($data['password_err'])){
                  $verify = password_verify($data['password'],  $datauserpasse['password']);
                  if($verify){
                       $auth = $this->model->userroles($datauserpasse['id']);
                       $_SESSION['userId'] = $datauserpasse['id'];
                       $_SESSION['useremail'] = $datauserpasse['email'];
                       $_SESSION['userPassword'] = $datauserpasse['password'];
                       $_SESSION['userRole'] = $auth;
                       $_SESSION['f_name'] = $datauserpasse['f_name'];
                       $_SESSION['l_name'] =$datauserpasse['l_name'];
                       

                            $this->redirect('admin');
                  }else{
                      $data['password_err'] = "password is not match";
                    
                    $this->_view('adminpanel/login',$data);
                }
            } 
        }else{
            $data = [
                "email" =>'',
                "password" => '',
                'email_err' => '',
                'password_err' => ''
            ];
            $this->_view('adminpanel/login',$data);

        }
       
    
    }

    public function saveAction(){
        
    } 
    public function loginAction(){
        $this->defaultAction();
    }


    public function registerAction(){
        $this->redirectuser();

        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER['REQUEST_METHOD'] == 'POST' ){
            
                $data = [
                    "email" => $_POST["email"],
                    "name" => $_POST["name"],
                    "lname" => $_POST["lname"],
                    "password" => $_POST["password"],
                    "Cpassword" => $_POST["Cpassword"],
                    'email_err' => '',
                    'password_err' => '',
                    'Cpassword_err' => '',
                    "name_err" => '',
                    "lname_err" => '',
                    "aggree_err" =>''
                ];

                if(empty($data['email'])) $data['email_err'] = 'email is a required';
                if(empty($data['name'])) $data['name_err'] = 'name is required';
                if(empty($data['lname'])) $data['lname_err'] = 'last name is required';
                if(empty($data['password'])) $data['password_err'] = 'password is required';
                if(empty($data['Cpassword'])) $data['Cpassword_err'] = 'Confirm password is required';
                if(strlen($data['Cpassword']) <= 3) $data['password_err'] = 'minimum chars in passowrd is 8';
                if($data['Cpassword'] !=$data['password'] ) $data['Cpassword_err'] = 'please chech Confirm password is meme password';
                if($this->model->getuserbyemail($data['email'])){
                    $data['email_err'] = 'email all ready register plaese login';

                }

                if(empty($data["email_err"])
                && empty($data['password_err'])
                 && empty($data['name_err']) 
                 && empty($data['lname_err'])
                 && empty($data['Cpassword_err'])
                ){
                    $HashPassword = password_hash($data['password'],PASSWORD_DEFAULT);
                   if($this->model->registeusers($data['name'],$data['lname'],$data['email'],$HashPassword)){
                       $datausers = $this->model->getuser($data['email'],$HashPassword); 
                       $_SESSION['userId'] = $datausers['id'];
                       $_SESSION['useremail'] = $datausers['email'];
                       $_SESSION['userPassword'] = $datausers['password'];
                       $userrole = $this->model->userroles($datausers['id'],"user");
                       $_SESSION['userRole'] =  $userrole['name'];
                       if(isset($_SESSION['userRole']) && $_SESSION['userRole'] == "user"){
                            $this->redirect('admin');
                       }{
                            $this->redirect('admin/user/register');
                       }                
                     
                   }
                
                }else{
                    $this->_view('adminpanel/register',$data);
                }
                
           
        }else{
            $data = [
                "email" =>'',
                "name" => '',
                "lname" => '',
                "lname_err" => '',
                "password" => '',
                "Cpassword" => '',
                "lname_err" => '',
                'email_err' => '',
                'password_err' => '',
                'Cpassword_err' => '',
                "name_err" => '',

                
            ];
            $this->_view('adminpanel/register',$data);

        }
       
        

       
    }


    public function logoutAction(){
        if($this->destroy()){
            $this->redirect("admin/user");
        }else{
            $this->back();
        }
    }


}
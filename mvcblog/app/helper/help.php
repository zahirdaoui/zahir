<?php 

namespace PHPMVC\Helper;


trait Help{

   public function redirect($location){

       header("Location: ".URL_MAIN."$location");
       exit();
    
    }
    
    public static function  back(){
        header("Location: ".URL_MAIN."admin");
        exit();
    }

    public function Auth(){
        session_start();
        if(!isset($_SESSION['userRole']) || $_SESSION['userRole'] == null){
            $this->redirect("admin/user");
        }elseif(isset($_SESSION['userRole']) && $_SESSION['userRole'] == 'user'){
         $this->redirect("access/");
        }
    }

    public static function success($msg){
        if(isset($_SESSION[$msg])){
            echo '<div class="messages">
            <button class="btn btn-success m-2 btn-sm" style="border-radius:50%">
            <i class="fa fa-check fa-2x"></i></button>
            <span class= "text-success mt-2">'.$_SESSION[$msg].'</span></div>';
            unset($_SESSION[$msg]);
        }
    }

}

 
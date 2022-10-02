<?php
namespace PHPMVC\Controllers\Adminpanel;
use PHPMVC\Controllers\AbstractController;
use PHPMVC\Helper\Help;


class CommentController extends AbstractController
{
    use Help;
      public function __construct()
    {
        $this->Auth();    
    } 
        public function defaultAction(){
        
            $this->_view("adminpanel/comment");
            
        } 
        
        public function acceptecmdAction(){
        
            $this->_view("adminpanel/addblog");
            
        }

        public function editcmdAction(){
            
            $this->_view("adminpanel/addblog");
            
        }

        public function deletecmdAction(){
            
            $this->_view("adminpanel/addblog");
            
        }
}
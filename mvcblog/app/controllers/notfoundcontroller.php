<?php
namespace PHPMVC\Controllers;

class NotfoundController extends AbstractController {
    public function defaultAction(){
        $this->_view('errors/404');
    }
    public function faild_to_cconnct_to_databaseAction(){
        $this->_view('errors/502');
    }
    
}
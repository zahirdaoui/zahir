<?php

namespace PHPMVC\Controllers;

class AccessController  extends AbstractController{

    public function defaultAction(){

        $this->_view("errors/403");
        
    }

}
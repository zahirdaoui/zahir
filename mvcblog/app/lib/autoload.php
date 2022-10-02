<?php
namespace PHPMVC\LIB;
class Autoload {

    public static function autoload($className){
        $className = APP_PATH.$className;
        $className = str_replace("PHPMVC","",$className);
        $className = strtolower($className);
        $className = $className.'.php';
        if(!file_exists($className)){
            return;
        }
        require_once $className;

        


    }
}
spl_autoload_register(__NAMESPACE__."\Autoload::autoload");
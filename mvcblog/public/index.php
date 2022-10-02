<?php



namespace PHPMVC;
use PHPMVC\LIB\FrontController;
use PHPMVC\Database\Database;




if(!defined('DS')){
    define('DS',DIRECTORY_SEPARATOR);
}
include "..".DS."app".DS."config.php";

include APP_PATH.DS."database".DS."connection.php";

include APP_PATH.DS."lib".DS."autoload.php";
$db = new Database();

$fr = new FrontController();
$fr->dispatchUrl();









<?php

if(!defined('DS')){
    define('DS',DIRECTORY_SEPARATOR);
}
define('APP_PATH',realpath(dirname(__FILE__)));

define('APP_VEIW',APP_PATH.DS.'views');
define('APP_MODEL',APP_PATH.DS.'models');

define("URL_ROUTE",'http://localhost/mvcblog/');

define('URL_MAIN','http://localhost/mvcblog/public/');
define('URL_IMG',APP_PATH.DS.'dataimages'.DS.'admins'.DS);


define('URL_IMGDATA','http://localhost/mvcblog/public/dataimages/');
define('URL_IMGADM','http://localhost/mvcblog/app/dataimages/admins/');


/* not found iamges */
define('URL_NOIMG','http://localhost/mvcblog/public/dataimages/notfound/noimg.jpg');



// DataBase information 


define("DB_HOST","localhost");
define("DB_DATABASENAME","mvc_blog");
define("DB_USER","mvc");
define("DB_PASSWORD","1234");

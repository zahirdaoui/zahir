<?php
namespace PHPMVC\Database;
class Connection {

    private $_dbname = DB_DATABASENAME;
    private $_host = DB_HOST;
    private $_user = DB_USER;
    private $_password = DB_PASSWORD;
    public $pdo;


    public function connecter()
    {
        
        $dns = "mysql:host=".$this->_host.";dbname=".$this->_dbname.";charset=UTF8";
    
        try {
            $pdo = new \PDO( $dns, $this->_user,$this->_password);
            
        
           if ($pdo) {
                return $pdo;
                
            } 
        } catch (\PDOException $e) {
            echo $e->getMessage();

            require_once APP_VEIW.DS.'errors/502.view.php';
            die();
        }
        

    }
    

}
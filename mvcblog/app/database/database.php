<?php
namespace PHPMVC\Database;

use LDAP\Result;

/*   */
class Database extends  Connection {

 
    




    public $pdo;
    private $stmt;

    

    public function __construct()
    {    
      $this->pdo = $this->connecter(); 
        
    }

    

   public function query($sql){
    $this->stmt = $this->pdo->prepare($sql);
 } 
 public function execute(){
     if($this->stmt->execute()){
         return true;
     }else{
         return false;
     }
    
} 
 /* data base fetch data base */

 public function gettAll(){
    
     if($this->stmt->execute()){
         $data = $this->stmt->fetchAll();
         /* var_dump($data); */
         return  $data;
     }else{
         return false;
     }
 }

    /* fin database */

    public function gett(){
        if($this->stmt->execute()){
            return $this->stmt->fetch();
        }
    }
 

        /* delete witch table name */
 public function delete($table,$where = null){
       
    // Check to see if table exists
     if($this->tableExists($table)){
         // The table exists check to see if we are deleting rows or table
         if($where == null){
            $delete = 'DELETE '.$table; // Create query to delete table
        }else{
            $delete = 'DELETE FROM '.$table.' WHERE '.$where; // Create query to delete rows
        }
        $this->query($delete);
        if( $this->execute()){
            return true;
        }
    }else{
        return false; // The table does not exist
    }
} 





    public function rowCount(){
           $this->execute();
            return $this->stmt->rowCount();
            
       
    }


    //function finished




        // Public function to check if table exists for use with queries
        public function tableExists($table){
            $qr = "SELECT * FROM information_schema.tables WHERE table_schema = 'mvc_blog' AND table_name = '$table' LIMIT 1";
            $this->query($qr);
            $tablesInDb = $this->rowCount();
            if($tablesInDb == 1){
                return true;
            }else{
                return false;
            }
        }



        public function bind($param , $value , $type = null){
            if(is_null($type)){
                switch(true){
                    case is_int($value):
                        $type = \pdo::PARAM_INT;
                    break;
                    case is_bool($value):
                        $type = \pdo::PARAM_BOOL;
                        break;
                    case is_null($value):
                        $type = \pdo::PARAM_NULL;
                        break;
                    default:
                        $type = \pdo::PARAM_STR;
                }
    
            }
            $this->stmt->bindValue($param , $value , $type);
        }


        // insert data witch howt database

        public function insert($table,$params=array()){
             if($this->tableExists($table)){

                 $sql='INSERT INTO '.$table.' ('.implode(',',array_keys($params)).') VALUES ("' . implode('", "', $params) . '")';
                 $this->query($sql);
                if($this->execute()){
                    return true; // The data has been inserted
                }else{
                    return false; // The data has not been inserted
                }
            }else{
                return false; // Table does not exist
            }
        }
    

   //select function

    public function select($table, $rows = '*', $join = null, $where = null, $order = null){
        /* $this->checkConnection(); */
    	// Create query from the variables passed to the function
    	$q = 'SELECT '.$rows.' FROM '.$table;
		if($join != null){
			$q .= ' '.$join;
		}
		if($where != null){
        	$q .= ' WHERE '.$where;
		}
        if($order != null){
            $q .= ' ORDER BY '.$order;
		}
        return $this->query($q); 
        	
    } 



public function getUserByEmail($email){
    $this->query("SELECT * FROM users WHERE email = :email");
    $this->bind("email",$email);
    if($this->execute()){
        if($this->rowCount()>0){
            return true;
        }
    }
}



public function pagination($table, $rows ,$resultPerPage = 10, $page = 1){

    $pagination = [];

    //number of data on pere page


    

    // gete data frome database for show it
    
    
    $this->select($table, $rows);
    $numberresult = $this->rowCount();

    // shose number page curent

    if(!isset($_GET['page'])){
        $page = 1;
    }else if(isset($_GET['page'])){
        $page = $_GET['page'];
    }

    // totlae pages 

    $totalePages = ceil($numberresult/$resultPerPage);

    // here fo lop for gete pagnination frome boostrap

    for($count = 1 ; $count <= $totalePages ; $count++){
        // here if we can to add what we want exaxtement frome data pase
    }
    /* 

         for loopp

     */
    $this->query("SELECT * FROM $table LIMIT ".$resultPerPage." OFFSET ".($page-1)*$resultPerPage);
    $result = $this->gettAll();


    $pagination['NumberPages'] = $totalePages; 
    $pagination['data'] = $result;


    // show result pages
    return $pagination;
}

public function lastidinserted(){
    

     return $this->pdo->lastInsertId();
}





 public function __destruct()
    {
        if($this->stmt != null){
            $this->stmt = null;
        }
        if($this->pdo != null){
            $this->pdo = null;
        }
    } 


    public function getByid($table , $where){

        $this->query("SELECT * FROM $table WHERE id = $where");
       

    }

    


}


<?php
namespace PHPMVC\Models;

use Error;
use PHPMVC\Database\Database;

class UsersModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database(); 
        
    }
    public function pagination()
    {
       $data = $this->db->pagination('users',"*");

      return $data;

    }

    public function getuserbyemail($email){
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(":email",$email);
        $this->db->execute();
        
        if($this->db->rowCount()){
            return $this->db->gett();
        }else{
            return false;
        }
    }

    public function registeusers($name , $lastname , $email , $password){
        $this->db->query('INSERT INTO users (f_name , l_name , email , password) VALUE (:name , :lastname , :email , :password)');
        $this->db->bind(':name',$name);
        $this->db->bind(':lastname',$lastname);
        $this->db->bind(':email',$email);
        $this->db->bind(':password',$password);
        if($this->db->execute()){
           $userid = $this->db->lastidinserted(); 
             if($userid > 0){
                $this->db->query('INSERT INTO users_rols (`user_id`, `role_id`) VALUE (:userid ,:rolid)');
                $this->db->bind(':rolid',2);
                $this->db->bind(':userid',$userid);
                $this->db->execute();
                return true;
            }  

        }else{
            return false;
        }

    }
    public function userroles($userid){
         $this->db->query("SELECT * FROM `roles` INNER JOIN users_rols ON users_rols.role_id = roles.id WHERE users_rols.user_id = '".$userid."'");
         $data = $this->db->gett();
         return $data['name'];           
    }



  public function getuser($rols){
            $this->db->query("SELECT users.* FROM `users` 
            INNER JOIN users_rols
                   ON users.id = users_rols.user_id
             INNER JOIN roles
               ON roles.id = users_rols.role_id where roles.name ='".$rols."'");
            return $this->db->gettAll(); 
    }

    public function  gettByid($id){
       return $this->db->getByid('users',$id);
    }
    public function gettuserByid($id){
        $this->db->query("SELECT users.*  , roles.name as roleuser  FROM `users` 
        INNER JOIN users_rols
               ON users.id = users_rols.user_id
         INNER JOIN roles
           ON roles.id = users_rols.role_id where users.id = $id");
        return $this->db->gett(); 
}

public function editrols($role = 2 ,$id){

      $this->db->query("UPDATE `users_rols` SET `role_id`= $role WHERE user_id = $id");
    if($this->db->execute()){
        return true;
    }else{
        return false;
    }

}

public function upadteuser($id , $fname ,$lastname,$email,$mobile,$role){
    $this->db->query("UPDATE `users` SET `f_name`='$fname',`l_name`='$lastname',`email`='$email',`mobile`='$mobile' WHERE id = $id");
    
    $this->editrols($role ,$id);

    /* $this->db->query("UPDATE `users` SET `f_name`=':firstname',`l_name`=':lastname',`email`=':email',`mobile`=':mobile' WHERE id = :id"); */
    /* $this->db->bind(":firstname",$fname);
    $this->db->bind(":lastname",$lastname);
    $this->db->bind(":email",$email);
    $this->db->bind(":mobile",$mobile);
    $this->db->bind(":id",$id); */
    if($this->db->execute()){
        return true;
    }

}

public function updatepassword($id , $password){
    $HashPassword = password_hash($password,PASSWORD_DEFAULT);
    $this->db->query("UPDATE `users` SET `password`='$HashPassword'  WHERE id =$id");
   /*  $this->db->bind(":password",$HashPassword);
    $this->db->bind(":id",$id); */
    
    if($this->db->execute()){
        return true;
    }
}

public function insertimage($id , $imag){
   
    $this->db->query("UPDATE `users` SET `img`='$imag'  WHERE id =$id");
   /*  $this->db->bind(":password",$HashPassword);
    $this->db->bind(":id",$id); */
    
    if($this->db->execute()){
        return true;
    }

}


 public function deletedbyid($table,$id){
                return $this->db->delete($table,'id = '.$id);
 }
 
  
     
} 

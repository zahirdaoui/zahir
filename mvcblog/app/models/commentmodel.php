<?php
namespace PHPMVC\Models;

use Error;
use PHPMVC\Database\Database;

class CommentModel {
    private $db;

    public function __construct()
    {
        $this->db = new Database(); 
        
    }

    public function gettAll(){
        $this->db->query("SELECT * FROM `post_comment`");
        if($this->db->execute()){
            return $this->db->gettAll();
        }
    }
    public function rowCount(){
        $this->gettAll();
         return $this->db->rowCount();
    }
    public function insertComment($username,$content,$id_post){
        $this->db->query("INSERT INTO `post_comment`(`post_id`, `comment`, `user_name`) VALUES ('$id_post','$content','$username')");
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function gettCommentByPost($id_post){
        $this->db->query("SELECT * FROM `post_comment` WHERE post_id = $id_post");
        if($this->db->execute()){
            return $this->db->gettAll();
        }
    }
    

}
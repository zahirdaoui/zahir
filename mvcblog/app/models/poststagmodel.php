<?php
namespace PHPMVC\Models;

use Error;
use PHPMVC\Database\Database;

class PoststagModel {
    private $db;

    public function __construct()
    {
        $this->db = new Database(); 
        
    }

    public function addposttag($tagid,$postid){
        $this->db->query("INSERT INTO `post_tag`(`post_id`, `tag_id`) VALUES (:tagid,:postid)");
        $this->db->bind(':tagid',$tagid);
        $this->db->bind(':postid',$postid);
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    
    

}

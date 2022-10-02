<?php
namespace PHPMVC\Models;

use Error;
use PHPMVC\Database\Database;

class TagsModel {
    private $db;

    public function __construct()
    {
        $this->db = new Database(); 
        
    }

    public function gettags(){
        $this->db->query("SELECT * FROM `tags`");
        if($this->db->execute()){
            return $this->db->gettAll();
        }
    }
    
   public function addtags($tag){
       $this->db->query("INSERT INTO `tags` (`name`) VALUES (:tag)");
       $this->db->bind(':tag',$tag);
       if($this->db->execute()){
           return $this->db->lastidinserted();
       }else{
           return false;
       }
   }

   public function gettagbyid($id){
       $this->db->getByid('tags',$id);
       return $this->db->gett();
   }

   public function edittag($id , $name){

       $this->db->query("UPDATE `tags` SET `name`= :name  WHERE id = $id");
       $this->db->bind(':name',$name);
       if($this->db->execute()){
           return true;
       }

   }
   public function delete($table,$id){

        $this->db->query("DELETE FROM `$table` WHERE id = :id");

        $this->db->bind(':id',$id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
   }

   public function check($tag){
         $this->db->query("SELECT * FROM `tags` WHERE name = '$tag'");
         if($this->db->execute()){
              $this->db->gettAll();
             if($this->db->rowCount()>0){
                 return false;
             }else{
                 return true;
             }

         }
   }

   public function addcategories($namecate){
    $this->db->query("INSERT INTO `category` (`content`) VALUES (:categories)");
    $this->db->bind(':categories',$namecate);
    if($this->db->execute()){
        return true;
    }else{
        return false;
    }
   }

   public function gettTagsByPost($id){
    $this->db->query("SELECT tags.* FROM `tags` INNER JOIN post_tag on post_tag.tag_id = tags.id WHERE post_tag.post_id = $id");
    if($this->db->execute()){
        return $this->db->gettAll();
    }
}

public function editTgasByPostId($tags){
    
    if($this->db->execute()){
        $this->addtags($tags);
        }
        
    }

    public function deletetagspost($id){
        $this->db->query("DELETE FROM `post_tag` WHERE post_tag.post_id = $id");
        $this->db->execute();
    }
    public function mustTagUse(){
        $this->db->query("SELECT DISTINCT name FROM `tags`");
        if($this->db->execute()){
            return $this->db->gettAll();
        }
    }
}


    
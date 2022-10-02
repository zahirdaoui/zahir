<?php
namespace PHPMVC\Models;

use Error;
use PHPMVC\Database\Database;

class CategoryModel {
    private $db;

    public function __construct()
    {
        $this->db = new Database(); 
        
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

       public function getcategoryById($id){
        $this->db->query("SELECT * FROM `category` WHERE id = $id");
        if($this->db->execute()){
             return $this->db->gett();
            }

       }



       public function check($content){
        $this->db->query("SELECT * FROM `category` WHERE content = '$content'");
        if($this->db->execute()){
             $this->db->gettAll();
            if($this->db->rowCount()>0){
                return false;
            }else{
                return true;
            }

        }
  }



  public function delete($id){

    $this->db->query("DELETE FROM `category` WHERE id = :id");

    $this->db->bind(':id',$id);
    if($this->db->execute()){
        return true;
    }else{
        return false;
    }
}



public function editactegory($id , $name){

    $this->db->query("UPDATE `category` SET `content`= :name  WHERE id = $id");
    $this->db->bind(':name',$name);
    if($this->db->execute()){
        return true;
    }

}


public function gettcategory(){
    $this->db->query("SELECT * FROM `category`");
    if($this->db->execute()){
        return $this->db->gettAll();
    }
}
public function gettcategoryByPost($id){
    $this->db->query("SELECT category.id, category.content as category FROM `category` INNER JOIN post_category ON post_category.category_id = category.id WHERE post_category.post_id = $id");
    if($this->db->execute()){
        return $this->db->gett();
    }
}

public function editcatpost($id_post,$id_category){
    if($this->gettcategoryByPost($id_post)>0){
        $this->db->query("UPDATE `post_category` SET`category_id`='$id_category' WHERE post_id =$id_post");
    }else{
        $this->db->query("INSERT INTO `post_category`(`post_id`, `category_id`) VALUES ('$id_post','$id_category')");
    }
   if($this->db->execute()){
     return true;
   }
}

public function addcatpost($id_post , $id_category){
    $this->db->query("INSERT INTO `post_category`(`post_id`, `category_id`) VALUES ('$id_post','$id_category')");
    if($this->db->execute()){
        return true;
    }else{
        return false;
    }
}




     
}
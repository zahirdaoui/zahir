<?php
namespace PHPMVC\Models;

use PHPMVC\Database\Database;

class PostsModel{
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

    public function addPost($title,$img,$status_comment,$slug,$content,$userid){

        $this->db->query("INSERT INTO `post`(`post_title`, `post_slug`, `img_cover`,`status_comment`, `post_content`, `user_id`) VALUES (:title,:slug,:img,:status_comment,:content,:userid)");
        $this->db->bind(':title',$title);
        $this->db->bind(':slug',$slug);
        $this->db->bind(':status_comment',$status_comment);
        $this->db->bind(':img',$img);
        $this->db->bind(':content',$content);
        $this->db->bind(':userid',$userid);
        if($this->db->execute()){

            return $this->db->lastidinserted();
        }else{
            return false;
        }
    }
    public function gettAll(){
        $this->db->query("SELECT * FROM `post`");
        if($this->db->execute()){
            return $this->db->gettAll();
        }
    }
    public function papPosts($page){
        return $this->db->pagination('post','*',2,$page);

    }
    public function rowCount(){
        $this->gettAll();
         return $this->db->rowCount();
    }

    public function deletePost($id){
        $this->db->delete('posts',$id);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getByid($id){
        $this->db->getByid('post',$id);
        if($this->db->execute()){
            return $this->db->gett();
        }else{
            return false;
        }
    }

 
    
    public function editPost($id,$post_title,$post_slug,$img,$content){
        $this->db->query("UPDATE `post` SET `post_title`= '$post_title' ,`post_slug`= '$post_slug' ,`img_cover`='$img',`post_content`= '$content'  WHERE id = $id");
 
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    
    public function getLatestPostByCategory($category,$count_posts) {
        $this->db->query("SELECT post.* , users.f_name , users.l_name FROM `post` INNER JOIN users on users.id = post.user_id INNER JOIN post_category ON post_category.post_id = post.id INNER JOIN category ON category.id = post_category.category_id WHERE category.content = '$category' LIMIT $count_posts");
        if($this->db->execute()){
            return $this->db->gettAll();
        }
    }  
    public function getpostByid($id){

        $this->db->query("SELECT post.*, category.content , users.f_name ,users.l_name , users.img, tags.name FROM `post` INNER JOIN post_category ON post_category.post_id = post.id INNER JOIN category ON category.id = post_category.category_id INNER JOIN post_tag ON post_tag.post_id = post.id INNER JOIN tags ON tags.id = post_tag.tag_id INNER JOIN users ON users.id = post.user_id WHERE post.id = $id");
        $this->db->execute();
        return $this->db->gett();
    }
    public function geteLatestPst($limit){
        $this->db->query("SELECT * FROM `post` ORDER BY create_at DESC LIMIT $limit");
        if($this->db->execute()){
            return $this->db->gettAll();
        }
    }
    public function getpostsByCaterogy($category){
        $this->db->query("SELECT post.* , users.f_name , users.l_name FROM `post` INNER JOIN users on users.id = post.user_id INNER JOIN post_category ON post_category.post_id = post.id 
        INNER JOIN category ON post_category.category_id = category.id 
        WHERE category.content = '$category'");
        if($this->db->execute()){
            return $this->db->gettAll();
        }
    }
    public function getpostsByTags($tags){
        $this->db->query("SELECT post.* , users.f_name , users.l_name FROM `post` INNER JOIN users on users.id = post.user_id INNER JOIN post_tag ON post_tag.post_id = post.id INNER JOIN tags ON tags.id = post_tag.tag_id WHERE tags.name = '$tags'");
        if($this->db->execute()){
            return $this->db->gettAll();
        }
    }
}
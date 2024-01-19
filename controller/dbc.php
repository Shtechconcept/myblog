<?php
require 'config.php';

class Dbc extends Database{
    public function uploadPost($postTitle, $postCat, $postDescription, $postImg){
       $sql = "INSERT INTO blogPost (postTitle, postCat, postDescription, postImg) VALUES ('$postTitle', '$postCat', '$postDescription', '$postImg')";
       $stmt = $this->conn->prepare($sql);
       $stmt->execute();
       return true;
    }

    public function fetchPost(){
        $sql = "SELECT * FROM blogPost";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $fetch = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $fetch;
    }

    public function fetchSinglePost($id){
        $sql = "SELECT * FROM blogPost WHERE id='$id'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $fetch = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $fetch;
    }
}
<?php
require_once 'Connection.php';

class Post extends Connection{
    
    protected $titol;
    protected $descripcio;
    protected $img_url;
    protected $data;

    public function __construct($titol = null, $descripcio = null, $img_url = null, $data = null){
        $this->titol = $titol;
        $this->descripcio = $descripcio;
        $this->img_url = $img_url;
        $this->data = $data;
       }

    public function setPost($sessionUser){
        $stmt = $this->connect()->prepare("INSERT INTO posts (titol, descripcio, img_url, id_user) VALUES (?,?,?, ?)");
        $stmt->execute(array($this->titol, $this->descripcio, $this->img_url, $sessionUser));
        $res = $stmt->rowCount();
        $stmt = null;
        return $res;
    }

    public function getPost($sessionUser){
        $error = false;
        $res = null;
        $stmt = $this->connect()->prepare("SELECT p.titol, p.descripcio, p.img_url, p.data, u.username, u.image_user FROM posts p INNER JOIN users u ON p.id_user=u.id WHERE p.id_user = ?;");

        if(!$stmt->execute(array($sessionUser))){
            $error = true;
        }

        if($stmt->rowCount()>0){
            $res = $stmt->fetchAll();
        }

        $stmt = null;
        return $error ? $error : $res;
    }


}

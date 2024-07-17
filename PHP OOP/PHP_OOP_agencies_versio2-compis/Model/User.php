<?php
require_once 'Connection.php';
class User extends Connection{
    
    protected $userId;
    protected $username;
    protected $password;
    protected $email;
    protected $image_user;

    public function __construct($username = null, $password = null, $email = null, $image_user = null, $userId=null){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->image_user = $image_user;
        $this->userId = $userId;
       }

    public function setUser(){
        $error = false;
        $stmt = $this->connect()->prepare("INSERT INTO users (username, password, email, image_user) VALUES (?,?,?,?)");

       // $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($this->username, $this->password, $this->email, $this->image_user))){
            $error = true;
        }
        $stmt = null;
        return $error;

    }

    // protected function checkUser($username, $email){
    //     $error = 0;
    //     $stmt = $this->connect()->prepare("SELECT username from users WHERE username = ? OR email = ?");

    //     if(!$stmt->execute(array($username, $email))){
    //         $error = 1;
    //     }

    //     if($stmt->rowCount()>0){
    //         $error = 2;
    //     }

    //     $stmt = null;
    //     return $error;
    // }

    public function verifyLoginUser(){
        $error = 0;
        $stmt = $this->connect()->prepare("SELECT password from users WHERE username = ?");

        if(!$stmt->execute(array($this->username))){
            $error = 1;
        }

        if($stmt->rowCount()>0){
            $res = $stmt->fetchAll();
            $verifiedPwd = $res[0]['password'];
         
            if($this->password !== $verifiedPwd){
                $error = 2;
            }
        }

        $stmt = null;
        return $error;

    }

    public function getUserId(){
        $stmt = $this->connect()->prepare("SELECT id from users WHERE username = ?");
        
        if(!$stmt->execute(array($this->username))){
            return null;
        } else {
            $res = $stmt->fetchAll();
            return $res[0]['id'];
        }
       
    }

}
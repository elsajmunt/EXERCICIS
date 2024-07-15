<?php 

class UserContr extends User{
    private $username;
    private $password;
    private $repeatPwd;
    private $email;

    public function __construct($username, $password, $repeatPwd, $email){
        $this->username = $username;
        $this->password = $password;
        $this->repeatPwd = $repeatPwd;
        $this->email = $email;
    }

    /**Setters and getters */
    public function setUsername($username){
         $this->username = $username;
    }
    public function getUsername(){
        return $this->username;
    }
    
    public function setPassword($password){
        $this->password = $password;
    }
    public function getPassword(){
        return $this->password;
    }
   
    public function setRepeatPwd($repeatPwd){
        $this->repeatPwd = $repeatPwd;
    }
    public function getRepeatPwd(){
        return $this->repeatPwd;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
       return $this->email;
    }
    /*** */

    public function signupUser(){ // FUNCIÓ VALIDACIÓ REGISTRE 

        //validation
        if($this->emptyInput() == false){
            header("Location: ../view/signup.html?error=emptyInput");
            exit();
        }
        if($this->invalidUsername() == false){
            header("Location: ../view/signup.html?error=invaliduid");
            exit();
        }
        if($this->invalidEmail() == false){
            header("Location: ../view/signup.html?error=invalidemail");
            exit();
        }
        if($this->pwdMatch() == false){
            header("Location: ../view/signup.html?error=pwdmatch");
            exit();
        }
        if($this->usernameTakenChec() == false){
            header("Location: ../view/signup.html?error=usermailtaken");
            exit();
        }

        //setUser to DB
        if($this->setUser($this->username, $this->password, $this->email)){ // Funció setUser està a Model-user.php
            header("Location: ../view/signup.html?error=FailedStmt"); // error=FailedStmt per què?
        }
    } 

    // FUNCIONS PER VALIDACIONS REGISTRE:

    private function emptyInput(){  // INPUTS BUITS
        $result = true;

        if(empty($this->username) || empty($this->password) || empty($this->repeatPwd) || empty($this->email)){
            $result = false;
        }
        return $result;
    }

    private function invalidUsername(){ // NOM USUARI INVALIT
        $result = true;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username)){
            $result = false;
        }
        return $result;
    }

    private function invalidEmail(){ // EMAIL INVALIT
        $result = true;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        return $result;
    }

    private function pwdMatch(){ // COINCIDIR PASWORDS
        $result = true;
        if($this->password !== $this->repeatPwd){
            $result = false;
        }
        return $result;
    }

    private function usernameTakenChec(){
        $result = true;
        if($this->checkUser($this->username, $this->email)){
            $result = false;
        }
        return $result;
    }

}
<?php
class User extends Connection{  
     
    protected function setUser($username, $password, $email){
        $error = false;
        $stmt = $this->connect()->prepare("INSERT INTO usuarios (NombreUnico, Pasword, Email) VALUES (?,?,?)");

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($username, $hashedPwd, $email))){
            $error = true;
        }
        $stmt = null;
        return $error;
    }

    protected function checkUser($username, $email){
        $stmt = $this->connect()->prepare("SELECT ID FROM usuarios WHERE NombreUnico = ? OR Email = ?;");
        if(!$stmt->execute(array($username, $email))){
            $stmt = null;
            header("Location: .../view/signup.html?error=stmtfailed");
            exit();
        }
        $resultCheck = false;
        if($stmt->rowCount()>0){
            $resultCheck = true;
        }

        return $resultCheck;
    }

    protected function verifyLoginUser($username, $password){  
        $error = 0;
        $stmt = $this->connect()->prepare("SELECT Pasword from usuarios WHERE NombreUnico = ?");
        $status = 1;
        if(!$stmt->execute(array($username))){
            $error = 1;
        }

        if($stmt->rowCount()>0){
            $res = $stmt->fetchAll();
            $hashedPwd = $res[0]['Pasword'];
            if(password_verify($password, $hashedPwd)==false){
                $error = 2;
            }else{
                $_SESSION["NombreUnico"] = $username; // LOGIN - INICI SESIÓ
            }
        }else{
            $error = 2;
        }
        $stmt = null;
        return $error;
    }
}

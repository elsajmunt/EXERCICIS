<?php
require_once 'Connection.php';

class Pis extends Connection{
    
    protected $id;
    protected $nompis;
    protected $imatge;
    protected $ubicacio;
    protected $descripcio;

    public function __construct($id = null, $nompis = null, $imatge = null, $ubicacio = null, $descripcio = null){
        $this->id = $id;        
        $this->nompis = $nompis;
        $this->imatge = $imatge;
        $this->ubicacio = $ubicacio;
        $this->descripcio = $descripcio;
       }

    public function setPis($sessionUser){ // INSERTAR 
        $stmt = $this->connect()->prepare("INSERT INTO pisos (id, nompis, imatge, ubicacio, descripcio, id_user) VALUES (?,?,?,?,?,?)");
        $stmt->execute(array($this->id, $this->nompis, $this->imatge, $this->ubicacio, $this->descripcio,  $sessionUser));
        $res = $stmt->rowCount();
        $stmt = null;
        return $res;
    }

    public function getPis($sessionUser){ // MOSTRAR 
        $error = false;
        $res = null;
        $stmt = $this->connect()->prepare("SELECT p.id,  p.nompis, p.imatge, p.ubicacio, p.descripcio, u.username, u.image_user FROM pisos p INNER JOIN users u ON p.id_user=u.id WHERE p.id_user = ?;");

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

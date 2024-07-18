<?php
class Pis extends Connection{ // CONEXIONS A LA BASE DE DADES:

    protected function insertPis($id, $tipus, $numhabitacions, $numlavabos){ // AFEGIR DADES - INSERT
        $error = false;
        $stmt = $this->connect()->prepare("INSERT INTO pisos (id, tipus, numhabitacions, numlavabos) VALUES (?,?,?,?)");

        if(!$stmt->execute(array($id, $tipus, $numhabitacions, $numlavabos))){
            $error = true;
        }
        $stmt = null;
        return $error;
    }

    protected function selectPis($tipus, $id){ // MOSTRAR DADES -SELECT
        $stmt = $this->connect()->prepare("SELECT tipus FROM pisos WHERE tipus = ? OR id = ?;"); //?..
        if(!$stmt->execute(array($tipus, $id))){
            $stmt = null;
            header("Location: .../view/noupis.php?error=stmtfailed"); // Error
            exit();
        }
        $resultCheck = false;
        if($stmt->rowCount()>0){
            $resultCheck = true;
        }

        return $resultCheck;
    }
}
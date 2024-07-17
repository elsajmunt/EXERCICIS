<?php
class Pis extends Connection{ // CONEXIONS A LA BASE DE DADES:

 // protected function setPis($id, $nompis, $imatge, $ubicacio, $descripcio){ // AFEGIR DADES - INSERT
    protected function insertPis($id, $nompis, $imatge, $ubicacio, $descripcio){ // AFEGIR DADES - INSERT
        $error = false;
        $stmt = $this->connect()->prepare("INSERT INTO pisos (id, nompis, imatge, ubicacio, descripcio) VALUES (?,?,?,?,?)");

        if(!$stmt->execute(array($id, $nompis, $imatge, $ubicacio, $descripcio))){
            $error = true;
        }
        $stmt = null;
        return $error;
    }

    protected function selectPis($nompis, $id){ // MOSTRAR DADES -SELECT
        $stmt = $this->connect()->prepare("SELECT pisos_nompis FROM pisos WHERE nompis = ? OR id = ?;"); //?..
        if(!$stmt->execute(array($nompis, $id))){
            $stmt = null;
            header("Location: .../view/crear_pis.html?error=stmtfailed"); // <<< Canviar Nom .html i fer que es Mostri resultat
            exit();
        }
        $resultCheck = false;
        if($stmt->rowCount()>0){
            $resultCheck = true;
        }

        return $resultCheck;
    }
}

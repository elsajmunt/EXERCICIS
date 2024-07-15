<?php
class Pis extends Connection{

    protected function setPis($id, $nompis, $imatge, $ubicacio, $descripcio){ // AFEGIR DADES A LA BD
        $error = false;
        $stmt = $this->connect()->prepare("INSERT INTO pisos (id, nompis, imatge, ubicacio, descripcio) VALUES (?,?,?,?,?)");

        if(!$stmt->execute(array($id, $nompis, $imatge, $ubicacio, $descripcio))){
            $error = true;
        }
        $stmt = null;
        return $error;
    }

    protected function checkPis($nompis, $id){ // MOSTRAR DADES ?  <<<< Adaptar noms
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

<?php
class Vol extends Connection{ // CONEXIONS A LA BASE DE DADES:

    // INSERT ----------------- 
    protected function insertVol($fecha, $origen, $destino){ // AFEGIR DADES - INSERT 
        $error = false;
        $stmt = $this->connect()->prepare("INSERT INTO vuelos (Fecha, Origen, Destino) VALUES (?,?,?)");

        if(!$stmt->execute(array($fecha, $origen, $destino))){    
            $error = true;
        }
        $stmt = null;
        return $error;
    }

    // SELECT --------------- <<<<<
    protected function selectVols(){ // MOSTRAR TOTS ELS VOLS -SELECT
        $stmt = $this->connect()->prepare("SELECT * FROM vuelos"); //?..
        if(!$stmt->execute()){
            $stmt = null;
            header("Location: .../view/vols.php?ERROR=stmtfailed"); // Error
            exit();
        }
        $result = 0; 
        if($stmt->rowCount()>0){ // Si hi ha contingut a la Taula...
            $result = $stmt->fetchAll(); // recull totes les dades de la taula
        }

        return $result; // retorna o el resultat de la base de dades o 0 en cas que no hi hagi dades.
    }
}
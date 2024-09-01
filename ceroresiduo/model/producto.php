<?php
class Producto extends Connection{ // CONEXIONS A LA BASE DE DADES: 

    // SELECT ---------------
    protected function selectProductos(){ // MOSTRAR TOTS ELS PRODUCTES -SELECT
        $stmt = $this->connect()->prepare("SELECT * FROM productos"); //?..
        if(!$stmt->execute()){
            $stmt = null;
            header("Location: .../view/productos.php?error=stmtfailed"); // Error
            exit();
        }
        $result = 0; 
        if($stmt->rowCount()>0){ // Si hi ha contingut a la Taula...
            $result = $stmt->fetchAll(); // recull totes les dades de la taula Productes
        }
        return $result; // retorna o el resultat de la base de dades o 0 en cas que no hi hagi dades.
    } 
}

/* Mostra Exemple: --------------------------------------------------------------------
<?php
class Avio extends Connection{ // CONEXIONS A LA BASE DE DADES:

    // INSERT -----------------
    protected function insertAvio($matricula, $fabricante, $modelo, $capacidad, $autonomiaVuelo){ // AFEGIR DADES - INSERT 
        $error = false;
        $stmt = $this->connect()->prepare("INSERT INTO aviones (Matricula, Fabricante, Modelo, Capacidad, AutonomiaVuelo) VALUES (?,?,?,?,?)");

        if(!$stmt->execute(array($matricula, $fabricante, $modelo, $capacidad, $autonomiaVuelo))){    
            $error = true;
        }
        $stmt = null;
        return $error;
    }

    // SELECT ---------------
    protected function selectAvions(){ // MOSTRAR TOTS ELS AVIONS -SELECT
        $stmt = $this->connect()->prepare("SELECT * FROM aviones"); //?..
        if(!$stmt->execute()){
            $stmt = null;
            header("Location: .../view/avions.php?error=stmtfailed"); // Error
            exit();
        }
        $result = 0; 
        if($stmt->rowCount()>0){ // Si hi ha contingut a la Taula...
            $result = $stmt->fetchAll(); // recull totes les dades de la taula pisos
        }

        return $result; // retorna o el resultat de la base de dades o 0 en cas que no hi hagi dades.
    }
}
*/
<?php
class Producto extends Connection{ // CONEXIONS A LA BASE DE DADES: 

    // SELECT --------------- << Pendent Adaptar!!!!
    protected function selectProducto(){ // MOSTRAR PRODUCTE sol
        // $stmt = $this->connect()->prepare("SELECT * FROM productos"); 
        $stmt = $this->connect()->prepare("SELECT * FROM productos WHERE ID=id"); // <<< PROVAR Producte sol!
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
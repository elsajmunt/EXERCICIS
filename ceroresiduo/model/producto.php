<?php
class Producto extends Connection{ // CONEXIONS A LA BASE DE DADES 

    // SELECT ----- MOSTRAR TOTS ELS PRODUCTES a la Pàgina Productos:
    protected function selectProductos(){ // TOTS els Productes 
        $stmt = $this->connect()->prepare("SELECT * FROM productos"); //
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

    //SELECT ----- MOSTRAR PRODUCTE SOL a la Ficha Producto:
    protected function selectProducto(){ //PRODUCTE SOL
        if(isset($_GET["id"])) {
            $id = $_GET["id"];

           $stmt = $this->connect()->prepare("SELECT * FROM productos WHERE ID=$id"); // Producte sol
           if(!$stmt->execute()){
               $stmt = null;
               header("Location: .../view/ficha_producto.php?error=stmtfailed"); // Error
               exit();  
           }
           $result = 0; 
           if($stmt->rowCount()>0){ // Si hi ha contingut a la Taula...
               $result = $stmt->fetchAll(); // recull dades
           }
           return $result[0]; // Es queda amb el primer porduct (0).
        } else {
            //print("LO SENTIMOS! ACTUALMENTE NO TENEMOS ESTE PRODUCTO."); << Afegir després          
            return;
        } 
    }
} 

/* 
    // SELECT ----- MOSTRAR TOTS ELS PRODUCTES d'una CATEGORIA: <<<<< Adaptar!  
    protected function selectProductosCategoria(){ // Productes de la CATEGORIA
        $stmt = $this->connect()->prepare("SELECT * FROM productos WHERE IDCategoria=1"); // <<<< Adaptar ID genèric
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
*/


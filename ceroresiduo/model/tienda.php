<?php
class Tienda extends Connection{ // CONEXIONS A LA BASE DE DADES: 

    // SELECT ----- MOSTRAR TOTES LES BOTIGUES
    protected function selectTiendas(){ // TOTES LES BOTIGUES
        $stmt = $this->connect()->prepare("SELECT * FROM tiendas"); //
        if(!$stmt->execute()){
            $stmt = null;
            header("Location: .../view/tiendas.php?error=stmtfailed"); // Error
            exit();
        }
        $result = 0; 
        if($stmt->rowCount()>0){ // Si hi ha contingut a la Taula...
            $result = $stmt->fetchAll(); // recull totes les dades de la taula Tiendass
        }
        return $result; // retorna o el resultat de la base de dades o 0 en cas que no hi hagi dades.
    } 

    //SELECT ----- MOSTRAR BOTIGA SOLA a la Ficha Botiga   <<< PENDENT Crear!
    protected function selectTienda(){ // BOTIGA SOLA
        if(isset($_GET["id"])) {
            $id = $_GET["id"];

           $stmt = $this->connect()->prepare("SELECT * FROM tiendas WHERE ID=$id"); // Botiga sola
           if(!$stmt->execute()){
               $stmt = null;
               header("Location: .../view/ficha_botiga.php?error=stmtfailed"); // Error
               exit();  
           }
           $result = 0; 
           if($stmt->rowCount()>0){ // Si hi ha contingut a la Taula...
               $result = $stmt->fetchAll(); // recull dades
           }
           return $result[0]; // Es queda amb el primer porduct (0).
        } else {
            //print("LO SENTIMOS! ACTUALMENTE ESTA TIENDA NO EXISTE."); << Afegir després          
            return;
        } 
    }

}


/* Mostra Exemple: --------------------------------------------------------------------
    // SELECT ----- MOSTRAR TOTS PRODUCTES
    protected function selectProductos(){ // TOTS LES TIENDAS
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

 //SELECT ----- MOSTRAR PRODUCTE SOL a la Ficha Producto
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
*/
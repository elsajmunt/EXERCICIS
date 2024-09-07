<?php
class Categoria extends Connection { // CONEXIONS A LA BASE DE DADES 
    // SELECT ----- MOSTRAR EL NOM DE CADA CATEGORIA per la pàgina  
    protected function selectCategoria(){ // CATEGORIA
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $stmt = $this->connect()->prepare("SELECT Nombre FROM categorias WHERE ID=$id;"); // Nom Categoria
            if(!$stmt->execute()){
                $stmt = null;
                header("Location: .../view/categoria_productos.php?error=stmtfailed"); // Error
                exit();
            }
            $result = 0; 
            if($stmt->rowCount()>0){ // Si hi ha contingut a la Taula...
                $result = $stmt->fetchAll(); // recull totes les dades de la taula Categories
            }
            return $result; // retorna o el resultat de la base de dades o 0 en cas que no hi hagi dades.
             } 
        }

    // SELECT ----- MOSTRAR ELS NOMS DE LES CATEGORIES per la BARRA MENÚ (HIGIENE PERSONAL, HOGAR...)
        protected function selectCategorias(){ // CATEGORIA
            $stmt = $this->connect()->prepare("SELECT ID, Nombre FROM categorias;"); // Noms de Totes les Categories
            if(!$stmt->execute()){
                $stmt = null;
                header("Location: .../view/categoria_productos.php?error=stmtfailed"); // Error
                exit();
            }
            $result = 0; 
            if($stmt->rowCount()>0){ // Si hi ha contingut a la Taula...
                $result = $stmt->fetchAll(); // recull totes les dades de la taula Categories
            }
            return $result; // retorna o el resultat de la base de dades o 0 en cas que no hi hagi dades.
        }

    // SELECT ----- MOSTRAR TOTS ELS PRODUCTES d'una CATEGORIA:
    protected function selectProductosCategoria(){ // Productes de la CATEGORIA
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $stmt = $this->connect()->prepare("SELECT * FROM productos WHERE IDCategoria=$id"); // Productes Categoria
            if(!$stmt->execute()){
                $stmt = null;
                header("Location: .../view/categoria_productos.php?error=stmtfailed"); // Error
                exit();
            }
            $result = 0; 
            if($stmt->rowCount()>0){ // Si hi ha contingut a la Taula...
                $result = $stmt->fetchAll(); // recull totes les dades de la taula Productes
            }
            return $result; // retorna o el resultat de la base de dades o 0 en cas que no hi hagi dades.
            } 
        }
}






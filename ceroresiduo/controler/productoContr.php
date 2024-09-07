<?php 
class productoContr extends Producto{ // Classe Producto està a la carpeta Model
    private $nombre;
    private $precio;
    private $foto;
    private $descripcion;

    public function __construct($nombre=null, $precio=null, $foto=null, $descripcion=null){ 
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->foto = $foto;
        $this->descripcion = $descripcion;
    }

    /* Setters and Getters: */ 

    private function setNombre($nombre){ // NOMBRE
         $this->nombre = $nombre;
    }
    private function getNombre(){
        return $this->nombre;
    }

    private function setPrecio($precio){ // PRECIO
        $this->precio = $precio;
    }
    private function getPrecio(){
       return $this->precio;
    }

    private function setFoto($foto){ // FOTO
        $this->foto = $foto;
    }
    private function getFoto(){
       return $this->foto;
    }

    private function setDescripcion($descripcion){ // DESCRIPCION
        $this->descripcion = $descripcion;
    }
    private function getDescripcion(){
       return $this->descripcion;
    }

    /* FUNCIONS: */

        public function mostraProductos(){  // MOSTRAR TOTS ELS PRODUCTES -------------------       
                $resultat = $this->selectProductos();               
                return $resultat;
        }  
        
        public function mostraProducto(){  // MOSTRAR PRODUCTE SOL a la FITXA PRODUCTE -------------------       
            $resultat = $this->selectProducto();
            return $resultat;
        }   
} 

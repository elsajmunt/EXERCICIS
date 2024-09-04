<?php 
class tiendaContr extends Tienda{ // Classe Tienda està a la carpeta Model
    private $nombre;
    private $ciudad;
    private $foto;
    private $direccion;

    public function __construct($nombre=null, $ciudad=null, $foto=null, $direccion=null){ 
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->foto = $foto;
        $this->direccion = $direccion;
    }

    /* Setters and getters */ 

    private function setNombre($nombre){ // NOMBRE
         $this->nombre = $nombre;
    }
    private function getNombre(){
        return $this->nombre;
    }

    private function setCiudad($ciudad){ // ciudad
        $this->ciudad = $ciudad;
    }
    private function getCiudad(){
       return $this->ciudad;
    }

    private function setFoto($foto){ // FOTO
        $this->foto = $foto;
    }
    private function getFoto(){
       return $this->foto;
    }

    private function setDireccion($direccion){ // direccion
        $this->direccion = $direccion;
    }
    private function getDireccion(){
       return $this->direccion;
    }

    /****/
      
        public function mostraTiendas(){  // MOSTRAR TOTES LES BOTIGUES -------------------       
                $resultat = $this->selectTiendas();               
                return $resultat;
        }  
        
        public function mostraTienda(){  // MOSTRAR BOTIGA SOLA a la FITXA BOTIGA -------------------       
            $resultat = $this->selectTienda();
            return $resultat;
    }         
} 


/* Mostra Exemple: -------------------------------------------------------------
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
        
        / Setters and getters / 

        private function setNombre($nombre){ // NOMBRE
            $this->nombre = $nombre;
       }
       private function getNombre(){
           return $this->nombre;
       }

        public function mostraProductos(){  // Funció MOSTRAR TOTS ELS PRODUCTES -------------------       
                $resultat = $this->selectProductos();               
                return $resultat;
        }  
        
        public function mostraProducto(){  // Funció MOSTRAR PRODUCTE SOL a la FITXA PRODUCTE -------------------       
            $resultat = $this->selectProducto();
            return $resultat;
    }       
} */
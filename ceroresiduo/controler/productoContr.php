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

    /* Setters and getters */ 

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

    /****/
      
        public function mostraProductos(){  // FUNCIÓ MOSTRAR TOTS ELS PRODUCTES -------------------       
                // Posar Condicions...                    
                //selectProductos to DB 
                $resultat = $this->selectProductos() ;               
                return $resultat;
        }              
} 

/* Mostra Exemple: -------------------------------------------------------------
<?php 
class avioContr extends Avio{ // Classe Avio està a la carpeta Model
    //private $idAvion; 
    private $matricula;
    private $fabricante;
    private $modelo; 
    private $capacidad; 
    private $autonomiaVuelo; 

    public function __construct($matricula=null, $fabricante=null, $modelo=null, $capacidad=null, $autonomiaVuelo=null){ //Sense $idAvion
    //  $this->idAvion = $idAvion;
        $this->matricula = $matricula;
        $this->fabricante = $fabricante;
        $this->modelo = $modelo;
        $this->capacidad = $capacidad;
        $this->autonomiaVuelo = $autonomiaVuelo;
    }

 // Setters and getters

    private function setMatricula($matricula){ // MATRÍCULA
         $this->matricula = $matricula;
    }
    private function getMatricula(){
        return $this->matricula;
    }

    private function setFabricante($fabricante){ // FABRICANTE
        $this->fabricante = $fabricante;
    }
    private function getFabricante(){
        return $this->fabricante;
    }

    private function setModelo($modelo){ // MODELO
        $this->modelo = $modelo;
   }
    private function getModelo(){
       return $this->modelo;
   }

    private function setCapacidad($capacidad){ // CAPACIDAD 
    $this->capacidad = $capacidad;
    }
    private function getCapacidad(){
   return $this->capacidad;
    } 

    private function setAutonomiaVuelo($autonomiaVuelo){ // AUTONOMIA VUELO <<<<<
    $this->autonomiaVuelo = $autonomiaVuelo;
    }
    private function getAutonomiaVuelo(){
    return $this->autonomiaVuelo;
    }

    public function nouAvio(){  // FUNCIÓ AFEGIR UN NOU AVIÓ -------------------
            if($this->emptyInput() == false ){ 
                header("Location: ../view/nouavio.php?ERROR=ElsCampsSonObligatoris!");               
                exit();
            }
            
            //insertAvio to DB 
            if($this->insertAvio($this->matricula, $this->fabricante, $this->modelo, $this->capacidad, $this->autonomiaVuelo)){ // Funció insertAvio està a Model/avio.php
                header("Location: ../view/nouavio.php?error=FailedStmt"); // $error = true; Resultat Error!
            }
        }    

    // FUNCIONS PER VALIDAR FORMULARI NOU AVIÓ:  <<< 
        private function emptyInput(){ // Si INPUT BUIT
            $result = true;
            if(empty($this->matricula) || empty($this->fabricante) || empty($this->modelo) || empty($this->capacidad) || empty($this->autonomiaVuelo)){
                $result = false;
            }
            return $result;
        }
      
        public function mostraAvions(){  // FUNCIÓ MOSTRAR TOTS ELS AVIONS -------------------
            
                // Posar Condicions...                    
                //selectAvions to DB 
                $resultat = $this->selectAvions() ;               
                return $resultat;
        }              
} */
<?php 

class avioContr extends Avio{ // Classe Avio està a la carpeta Model
    //private $idAvion; 
    private $matricula;
    private $fabricante;
    private $modelo; 
    private $capacidad; 
    private $autonomiaVuelo; 

 /* public function __construct($idAvion=null, $matricula=null, $fabricante=null, $modelo=null, $capacidad=null, $autonomiaVuelo=null){  */
    public function __construct($matricula=null, $fabricante=null, $modelo=null, $capacidad=null, $autonomiaVuelo=null){ //Sense $idAvion
    //  $this->idAvion = $idAvion;
        $this->matricula = $matricula;
        $this->fabricante = $fabricante;
        $this->modelo = $modelo;
        $this->capacidad = $capacidad;
        $this->autonomiaVuelo = $autonomiaVuelo;
    }

    /* Setters and getters */ 

   /* private function setIdAvion($idAvion){ // ID
        $this->idAvion = $idAvion;
    }
    private function getIdAvion(){
        return $this->idAvion;
    } */

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
    /*** */

    public function nouAvio(){  // FUNCIÓ AFEGIR UN NOU AVIÓ -------------------
            if($this->emptyInput() == false ){ 
                header("Location: ../view/nouavio.php?ERROR=ElsCampsSonObligatoris!");               
                exit();
            }
            
            //insertAvio to DB 
            if($this->insertAvio($this->matricula, $this->fabricante, $this->modelo, $this->capacidad, $this->autonomiaVuelo) /*== true*/){ // Funció insertAvio està a Model/avio.php
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
            
} 


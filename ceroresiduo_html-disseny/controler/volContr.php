<?php // VOL

class volContr extends Vol{ // Classe Vol està a la carpeta Model 
    //private $idAvion; 
    private $fecha;
    private $origen;
    private $destino; 

    public function __construct($fecha=null, $origen=null, $destino=null){ //Sense id
        $this->fecha = $fecha;
        $this->origen = $origen;
        $this->destino = $destino;
    }

    /* Setters and getters */ 

    private function setFecha($fecha){ // FECHA
         $this->fecha = $fecha;
    }
    private function getFecha(){
        return $this->fecha;
    }

    private function setOrigen($origen){ // ORIGEN
        $this->origen = $origen;
    }
    private function getOrigen(){
        return $this->origen;
    }

    private function setDestino($destino){ // DESTINO
        $this->destino = $destino;
   }
    private function getDestino(){
       return $this->destino;
   }
    /*** */

    public function nouVol(){  // FUNCIÓ AFEGIR UN NOU VOL -------------------
            if($this->emptyInput() == false ){ 
                header("Location: ../view/nouvol.php?ERROR=ElsCampsSonObligatoris!");               
                exit();
            }
            
            //insertVol to DB 
            if($this->insertVol($this->fecha, $this->origen, $this->destino) /*== true*/){ // Funció a Model/vol.php
                header("Location: ../view/nouvol.php?ERROR=FailedStmt"); // $error = true; Resultat Error!
            }
        }    

    // FUNCIONS PER VALIDAR FORMULARI NOU VOL: 
        private function emptyInput(){ // Si INPUT BUIT
            $result = true;
            if(empty($this->fecha) || empty($this->origen) || empty($this->destino)){
                $result = false;
            }
            return $result;
        }

        public function mostraVols(){  // FUNCIÓ MOSTRAR TOTS ELS VOLS -------------------    
                // Posar Condicions...                    
                //selectVols to DB 
                $resultat = $this->selectVols() ;               
                return $resultat;
        }   
            
} 


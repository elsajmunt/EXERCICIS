<?php 

class pisContr extends Pis{ // Classe Pis està a la carpeta Model
    private $id;
    private $tipus;
    private $numhabitacions;
    private $numlavabos;

    private function __construct($id, $tipus, $numhabitacions, $numlavabos){
        $this->id = $id;
        $this->tipus = $tipus;
        $this->numhabitacions = $numhabitacions;
        $this->numlavabos = $numlavabos;
    }

    /* Setters and getters */ 

    private function setid($id){ // ID PIS
        $this->id = $id;
    }
    private function getid(){
        return $this->id;
    }

    private function settipus($tipus){ // TIPUS PIS
         $this->tipus = $tipus;
    }
    private function gettipus(){
        return $this->tipus;
    }
    
    private function setnumhabitacions($numhabitacions){ // NÚM HABITACIONS 
        $this->numhabitacions = $numhabitacions;
    }
    private function getnumhabitacions(){
        return $this->numhabitacions;
    }
   
    private function setnumlavabos($numlavabos){ // NÚM LAVABOS 
        $this->numlavabos = $numlavabos;
    }
    private function getnumlavabos(){
        return $this->numlavabos;
    }

    /*** */

    private function nouPis(){  // FUNCIÓ AFEGIR UN NOU PIS <<< acabar -------------------
            if($this->emptyInput() == false){ 
                header("Location: ../view/noupis.php?ERROR=ElsCampsSonObligatoris!");               
                exit();
            }
            
            //insertPis to DB 
            if($this->insertPis($this->tipus, $this->numhabitacions, $this->numlavabos, $this->descripcio ) /*== true*/){ // Funció insertPis està a Model/pis.php
                header("Location: ../view/noupis.php?error=FailedStmt"); // $error = true; Resultat Error!
            }
        }    

    // FUNCIONS PER VALIDAR FORMULARI NOU PIS:  <<< acabar!
        private function emptyInput(){ // INPUT BUIT
            $result = true;
            if(empty($this->tipus) || empty($this->numhabitacions) || empty($this->numlavabos)){
                $result = false;
            }
            return $result;
        }
      
        private function mostraPis(){  // FUNCIÓ MOSTRAR PIS/PISOS? <<<<<<<< acabar! -------------------
            
                // Posar Condicions...
                    
                //selectPis to DB 
                if($this->selectPis($this->tipus, $this->numhabitacions, $this->numlavabos, $this->descripcio ) /*== true*/){ // Funció selectPis està a Model/pis.php
                    header("Location: ../view/pisos.php?error=FailedStmt"); // $error = true; Resultat Error!
                }
            }    

} 


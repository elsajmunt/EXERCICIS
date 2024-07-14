<?php 

class pisContr extends Pis{ // Classe Pis està a la carpeta Model
    private $id;
    private $nompis;
    private $imatge;
    private $ubicacio;
    private $descripcio;

    public function __construct($id, $nompis, $imatge, $ubicacio, $descripcio){
        $this->id = $id;
        $this->nompis = $nompis;
        $this->imatge = $imatge;
        $this->ubicacio = $ubicacio;
        $this->descripcio = $descripcio;
    }

    /**Setters and getters */ 

    public function setid($id){ // ID PIS
        $this->id = $id;
    }
    public function getid(){
        return $this->id;
    }

    public function setnompis($nompis){ // NOM PIS
         $this->nompis = $nompis;
    }
    public function getnompis(){
        return $this->nompis;
    }
    
    public function setimatge($imatge){ // IMATGE PIS
        $this->imatge = $imatge;
    }
    public function getimatge(){
        return $this->imatge;
    }
   
    public function setubicacio($ubicacio){ // UBICACIÓ PIS
        $this->ubicacio = $ubicacio;
    }
    public function getubicacio(){
        return $this->ubicacio;
    }
    
    public function setdescripcio($descripcio){ // DESCRIPCIÓ PIS
        $this->descripcio = $descripcio;
    }
    public function getdescripcio(){
       return $this->descripcio;
    }
    /*** */

    public function nouPis(){  // FUNCIÓ AFEGIR UN NOU PIS <<<<<<<< acabar!
    //public function signupUser()
            //validation
            if($this->emptyInput() == false){ 
                header("Location: ../view/nou_pis.html?error=emptyInput"); 
                exit();
            }


    // FUNCIONS PER VALIDAR FORMULARI NOU PIS:  <<<<<<<<< acabar!

        private function emptyInput(){ // INPUT BUIT
            $result = true;

            if(empty($this->nompis) || empty($this->imatge) || empty($this->ubicacio) || empty($this->descripcio)){
                $result = false;
            }
            return $result;
        }
    }
}

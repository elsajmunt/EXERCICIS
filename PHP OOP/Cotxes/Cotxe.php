
<?php
class Cotxe{ // CLASSE Cotxe
    private $model; // ATRIBUT (VARIABLE) 
    private $matricula; 
    private $portes;
    private $color;

    public function __construct($model, $matricula, $portes, $color) { // CONSTRUCTOR
        $this->model=$model;
        $this->matricula=$matricula;
        $this->portes=$portes;
        $this->color=$color;
    } 

/*** GETTERS I SETTERS:  */

    public function getModel(){ // MODEL -
        return $this-> model;
    }

    public function setModel($model){
        return $this-> model=$model;
    } 


    public function getMatricula(){ //MATRÍCULA -
        return $this-> matricula;
    }

    public function setMatricula($matricula){
        return $this-> matricula=$matricula;
    }

 // Pendent Continuar amb Setters and Getters.... 

 public function pararCotxe(){
    echo "El cotxe està  parat.";
}

/* // EXEMPLE:
    public function saludar() {  // MÈTODE (FUNCIÓ) 
        echo "Hola".$this->nom;
    }

    public function __destruct() { // DESTRUCTOR // És només Exemple. En la Classe Persones NO té sentit!
        echo "<br>Adeu!!".$this->nom; // Tanca la conexió de la Classe.
    }  */

}


?>
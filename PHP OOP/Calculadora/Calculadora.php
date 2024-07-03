<?php
    class Calculadora{ // CLASSE Calculadora (Controlador)
        private $numero1; // ATRIBUT (VARIABLE) 
        private $numero2;
        private $operador; // (+ - * /) 
    //    protected $resultat; 

    //  public static $drinkingAge; // CLASSE ESTÀTICA. No depèn de cap instància, dins Class...

        public function __construct($numero1, $numero2, $operador) { // CONSTRUCTOR
            $this->numero1=$numero1;
            $this->numero2=$numero2;
            $this->operador=$operador;
        } 

        public function calcular() {  // MÈTODE (FUNCIÓ)
            switch ($this->operador) {
                case 'suma': 
                    return $this->numero1+$numero2; 
                    break;

                case 'resta': 
                    return $this->numero1-$numero2; 
                    break;    

                default: 
                return "Error";
                break;          
            }
         }

         private function emptyImput ($input) {
            if(empty($input));
                    //  Pendent Continuar.....
         }


/*        public function calcular() {  // MÈTODE (FUNCIÓ)
            echo "El RESULTAT és igual a = ".$this->resultat;
        } */

        /** Setters and Getters **/ 
        public function getResultat(){
            return $this-> resultat ;
        }
    // Pendent Continuar amb Setters and Getters....

        public function __destruct() { // DESTRUCTOR // És només Exemple.
            echo "<br>Aquí s'acaben els calculs. Adeu!!"; // Tanca la conexió de la Classe.
        }  
    }
?>
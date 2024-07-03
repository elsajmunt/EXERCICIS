
<?php
class Person{ // CLASSE Persona
    public $nom; // ATRIBUT (VARIABLE) 
    private $edat; 
    protected $genere;

    public static $drinkingAge; // CLASSE ESTÀTICA. No depèn de cap instància, dins Class Person...

    public function __construct($nom, $edat, $genere) { // CONSTRUCTOR
        $this->nom=$nom;
        $this->edat=$edat;
        $this->genere=$genere;
    } 

    /** Setters and Getters **/ 
public function getNom(){
    return $this-> nom ;
}
 // Pendent Continuar amb Setters and Getters....

    public function saludar() {  // MÈTODE (FUNCIÓ)
        echo "Hola".$this->nom;
    }

    public function __destruct() { // DESTRUCTOR // És només Exemple. En la Classe Persones NO té sentit!
        echo "<br>Adeu!!".$this->nom; // Tanca la conexió de la Classe.
    }  

/*    public function __destruct() { // DESTRUCTOR // IMPORTANT per tancar conexió a BD...!
        echo "Se ha cerrado la conxión a la Base de Datos..."; // Tanca la conexió.
    }  */  
}
 /*
$persona1 = new Person();
$persona1->nom = "Carles"; // public
$persona1->edat = "52"; // private: donarà error
$persona1->genere = "Masculí"; // protected */

?>
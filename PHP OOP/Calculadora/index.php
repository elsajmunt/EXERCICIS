
<?php

require "Calculadora.php";

$calcul1 = new Calculadora("50", "+", "5"); // Suma...
$calcul1->calcular();

$calcul2 = new Calculadora("10", "-", "3");

$calcul3 = new Calculadora("10", "*", "3"); 


// $persona1->saludar();

// $persona1->nom = "Carles"; // public: Es podrà veure
// $persona1->edat = "52"; // private: No es podrà veure
// $persona1->genere = "Masculí"; // protected

?> 

<?php

require "Person.php";

$persona1 = new Person("Carles", 52, "Masculí");

$persona1->saludar();

// $persona1->nom = "Carles"; // public: Es podrà veure
// $persona1->edat = "52"; // private: No es podrà veure
// $persona1->genere = "Masculí"; // protected

?> 

<?php

require "Cotxe.php";

$cotxe1 = new Cotxe("Peugeot", "1234KMY", "5", "Blau");
$coxe1->pararCotxe();
$coxe1->arrancarCotxe();
$coxe1->setColor("Groc"); // Modificar

$cotxe2 = new Cotxe("Seat", "1434BRE", "3", "Negre");
$coxe1->pararCotxe();
$coxe1->arrancarCotxe();
$coxe1->setColor("Blanc"); // Modificar


// $coxe1->saludar();

// $persona1->nom = "Carles"; // public: Es podrà veure
// $persona1->edat = "52"; // private: No es podrà veure
// $persona1->genere = "Masculí"; // protected

?> 
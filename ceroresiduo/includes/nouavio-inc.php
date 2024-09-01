<?php // CREAR NOU AVIÓ

if($_SERVER["REQUEST_METHOD"] == "POST"){ //

    // recoger datos del formulario
   // $idAvion = $_POST["IdAvion"]; // id
    $matricula = $_POST["Matricula"]; // Ha de ser mateix Nom que a Formulari noupis.php!
    $fabricante = $_POST["Fabricante"];
    $modelo = $_POST["Modelo"];
    $capacidad = $_POST["Capacidad"];
    $autonomiaVuelo = $_POST["AutonomiaVuelo"];

    //instanciar las classes
    require "../model/connection.php";
    require "../model/avio.php"; // Depèn de avio.php - BD
    require "../controler/avioContr.php"; // Depèn de ...Contr.php - Funcions

    $noupis = new avioContr($matricula, $fabricante, $modelo, $capacidad, $autonomiaVuelo); // Classe del Controler
// $noupis = new avioContr($idAvion, $matricula, $fabricante, $modelo, $capacidad, $autonomiaVuelo); // Classe del Controler
    $noupis->nouAvio(); // nouAvio és una Funció de la Classe avioContr

    //Volver a la pagina inicial (si està tot bé!)
    header("Location: ../view/avions.php"); // RESULTAT OK

}
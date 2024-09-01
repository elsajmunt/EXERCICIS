<?php // CREAR NOU VOL

if($_SERVER["REQUEST_METHOD"] == "POST"){ //

    // recoger datos del formulario
    $fecha = $_POST["Fecha"];
    $origen = $_POST["Origen"];
    $destino = $_POST["Destino"];

    //instanciar las classes
    require "../model/connection.php";
    require "../model/vol.php"; 
    require "../controler/volContr.php"; // Depèn de ...Contr.php - Funcions

    $nouvol = new volContr($fecha, $origen, $destino); // Classe del Controler
    $nouvol->nouVol(); // nouVol és una Funció de la Classe volContr

    //Volver a la pagina inicial (si està tot bé!)
    header("Location: ../view/vols.php"); // RESULTAT OK
}
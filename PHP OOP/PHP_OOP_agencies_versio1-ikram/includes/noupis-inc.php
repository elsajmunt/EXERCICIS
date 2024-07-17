<?php // CREAR NOU PIS...

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])){

    // recoger datos del formulario
    $id = $_POST["id"];
    $nompis = $_POST["nompis"];
    $imatge = $_POST["imatge"];
    $ubicacio = $_POST["ubicacio"];
    $descripcio = $_POST["descripcio"];

    //instanciar las classes
    require "../model/connection.php";
    require "../model/pis.php"; // Depèn de pis.php - BD
    require "../controler/PisContr.php"; // Depèn de PisContr.php - Funcions

    $noupis = new PisContr($id, $nompis, $imatge, $ubicacio, $descripcio); // Classe del Controler
    $noupis->nouPis(); // nouPis és una Funció de la Classe pisContr

    //Volver a la pagina inicial (si està tot bé!)
    header("Location: ../view/llista_pisos.php"); // RESULTAT OK

}
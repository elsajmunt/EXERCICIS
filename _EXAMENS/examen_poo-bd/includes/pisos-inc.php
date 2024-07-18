<?php // MOSTRAR PISOS

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])){

    // recoger datos del formulario
    $id = $_POST["id"];
    $tipus = $_POST["tipus"];
    $numhabitacions = $_POST["numhabitacions"];
    $numlavabos = $_POST["numlavabos"];

    //instanciar las classes
    require "../model/connection.php";
    require "../model/pis.php"; // Depèn de pis.php - BD
    require "../controler/PisContr.php"; // Depèn de PisContr.php - Funcions

    $mostrarpis = new PisContr($id, $tipus, $numhabitacions, $numlavabos); // Classe del Controler
    $mostrarpis->mostraPis(); // mostraPis és una Funció de la Classe pisContr
    // $mostrarpis->nouPis(); // nouPis és una Funció de la Classe pisContr

    //Volver a la pagina inicial (si està tot bé!)
    header("Location: ../view/pisos.php"); // RESULTAT OK

}
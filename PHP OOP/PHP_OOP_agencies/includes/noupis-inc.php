<?php // CREAR NOU PIS

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])){

    // recoger datos del formulario
    $id = $_POST["id"];
    $nompis = $_POST["nompis"];
    $imatge = $_POST["imatge"];
    $ubicacio = $_POST["ubicacio"];
    $descripcio = $_POST["descripcio"];

    //instanciar las classes
    require "../model/connection.php";
    require "../model/pis.php"; // pis.php
    require "../controler/PisContr.php"; // PisContr.php

    $noupis = new PisContr($id, $nompis, $imatge, $ubicacio, $descripcio);
    $noupis->nouPis();

    //Volver a la pagina inicial (si està tot bé!)
    header("Location: ../view/llista_pisos.php"); // RESULTAT OK

}
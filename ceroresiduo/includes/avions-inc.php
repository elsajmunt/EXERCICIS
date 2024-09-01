<?php // MOSTRAR LLISTA AVIONS

          //instanciar las classes
    require "../model/connection.php";
    require "../model/avio.php"; // Depèn de avio.php - BD
    require "../controler/avioContr.php"; // Depèn de AvioContr.php - Mètodes/Funcions

    $avioContr = new AvioContr(); // Classe del Controler   
    $vols = $avioContr->mostraAvions(); // mostraAvions és una Funció de la Classe AvioContr


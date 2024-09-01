<?php // MOSTRAR LLISTA VOLS

          //instanciar las classes
    require "../model/connection.php";
    require "../model/vol.php"; // Depèn de vol.php - BD
    require "../controler/volContr.php"; // Depèn de volContr.php - Mètodes/Funcions

    $volContr = new volContr(); // Classe del Controler    
    $vols = $volContr->mostraVols(); // mostraVols és una Funció de la Classe volContr


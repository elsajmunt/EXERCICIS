<?php // MOSTRAR LLISTA TIENDAS 

          //instanciar las classes
    require_once "../model/connection.php";
    require_once "../model/tienda.php"; // Depèn de tienda.php - BD 
    require_once "../controler/tiendaContr.php"; // Depèn de tiendaContr.php - Mètodes/Funcions

    $tiendaContr = new TiendaContr(); // Classe del Controler   
    $tiendas = $tiendaContr->mostraTiendas(); // TOTES LES TIENDAS. mostraTiendas=>Funció de la Classe TiendaContr
    
    $tiendaFichaContr = new TiendaContr(); // Classe del Controler
    $tienda = $tiendaFichaContr->mostraTienda(); // TIENDA SOLA per Ficha. mostraTienda=>Funció de la Classe TiendaContr

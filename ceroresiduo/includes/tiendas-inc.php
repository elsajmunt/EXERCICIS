<?php // MOSTRAR LLISTA TIENDAS 

          //instanciar las classes
    require_once "../model/connection.php";
    require_once "../model/tienda.php"; // Depèn de tienda.php - BD 
    require_once "../controler/tiendaContr.php"; // Depèn de tiendaContr.php - Mètodes/Funcions

    $tiendaContr = new TiendaContr(); // Classe del Controler   
    $tiendas = $tiendaContr->mostraTiendas(); // TOTES LES TIENDAS. mostraTiendas=>Funció de la Classe TiendaContr
    
    $tiendaFichaContr = new TiendaContr(); // Classe del Controler  <<< PENDENT Crear!
    $tienda = $tiendaFichaContr->mostraTienda(); // TIENDA SOLA per Ficha. mostraTienda=>Funció de la Classe TiendaContr


/* Mostra Exemple Productes: 
          //instanciar las classes
    require "../model/connection.php";
    require "../model/producto.php"; // Depèn de producto.php - BD <<<<<< Crear!
    require "../controler/productoContr.php"; // Depèn de productoContr.php - Mètodes/Funcions

    $productoContr = new ProductoContr(); // Classe del Controler   
    $productos = $productoContr->mostraProductos(); // TOTS ELS PRODUCTES. mostraProductos=>Funció de la Classe ProductoContr
    
    $productoFichaContr = new ProductoContr(); // Classe del Controler  
    $producto = $productoFichaContr->mostraProducto(); // PRODUCTE SOL per Ficha. mostraProducto=>Funció de la Classe ProductoContr
*/
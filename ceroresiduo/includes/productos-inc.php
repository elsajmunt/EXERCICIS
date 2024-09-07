<?php // MOSTRAR LLISTA PRODUCTOS 

          //instanciar las classes
    require_once "../model/connection.php";
    require_once "../model/producto.php"; // Depèn de producto.php - BD
    require_once "../controler/productoContr.php"; // Depèn de productoContr.php - Mètodes/Funcions

    $productoContr = new ProductoContr(); // Classe del Controler   
    $productos = $productoContr->mostraProductos(); // TOTS ELS PRODUCTES. mostraProductos=>Funció de la Classe ProductoContr
    
    $productoFichaContr = new ProductoContr(); 
    $producto = $productoFichaContr->mostraProducto(); // PRODUCTE SOL per Ficha. 


<?php // MOSTRAR PRODUCTE a la Fitxa de Producte 

          //instanciar las classes
    require "../model/connection.php";
    require "../model/producto.php"; // Depèn de producto.php - BD
    require "../controler/productoContr.php"; // Depèn de productoContr.php - Mètodes/Funcions

    $productoContr = new ProductoContr(); // Classe del Controler   
    $producto = $productoContr->mostraProducto(); // mostraProducto és una Funció de la Classe ProductoContr << Pendent Crear!



    // $productos = $productoContr->mostraProductos(); // mostraProductos és una Funció de la Classe ProductoContr
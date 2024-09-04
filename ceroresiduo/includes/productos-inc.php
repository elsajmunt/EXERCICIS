<?php // MOSTRAR LLISTA PRODUCTOS 

          //instanciar las classes
    require "../model/connection.php";
    require "../model/producto.php"; // Depèn de producto.php - BD
    require "../controler/productoContr.php"; // Depèn de productoContr.php - Mètodes/Funcions

    $productoContr = new ProductoContr(); // Classe del Controler   
    $productos = $productoContr->mostraProductos(); // TOTS ELS PRODUCTES. mostraProductos=>Funció de la Classe ProductoContr
    
    $productoFichaContr = new ProductoContr(); // Classe del Controler  
    $producto = $productoFichaContr->mostraProducto(); // PRODUCTE SOL per Ficha. mostraProducto=>Funció de la Classe ProductoContr

/* Mostra Exemple:
    <?php // MOSTRAR LLISTA AVIONS       

          //instanciar las classes
    require "../model/connection.php";
    require "../model/avio.php"; // Depèn de avio.php - BD
    require "../controler/avioContr.php"; // Depèn de AvioContr.php - Mètodes/Funcions

    $avioContr = new AvioContr(); // Classe del Controler   
    $vols = $avioContr->mostraAvions(); // mostraAvions és una Funció de la Classe AvioContr

*/
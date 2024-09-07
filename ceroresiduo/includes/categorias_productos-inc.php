<?php // CATEGORIES dels PRODUCTES    

          //instanciar las classes
    require_once "../model/connection.php";
    require_once "../model/categoria.php"; // Depèn de categoria.php - BD
    require_once "../controler/categoriaContr.php"; // <<< Depèn de categoriaContr.php - Mètodes/Funcions

    $productoCategoriaContr = new CategoriaContr(); // Classe del Controler 
    $productosCategoria = $productoCategoriaContr->mostraProductosCategoria(); // PRODUCTES D'UNA CATEGORIA 

    /*
    $categoriaContr = new CategoriaContr(); // Classe del Controler 
    $categorias = $categoriaContr->mostraCategoria(); // CATEGORIA de productes <<<<
    */
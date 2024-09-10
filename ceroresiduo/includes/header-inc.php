<?php // HEADER per BARRA MAENÚ CATEGORIES 

      //instanciar las classes
    require_once BASE_PROJECTE."/model/connection.php";
    require_once BASE_PROJECTE."/model/categoria.php"; // Depèn de categoria.php - BD
    require_once BASE_PROJECTE."/controler/categoriaContr.php"; // Depèn de categoriaContr.php - Mètodes/Funcions

    $categoriaContr = new CategoriaContr(); // Classe del Controler 
    $categorias = $categoriaContr->mostraCategoria(); // CATEGORIA de productes <<<<
    $categoriasMenu = $categoriaContr->mostraCategorias();
?>
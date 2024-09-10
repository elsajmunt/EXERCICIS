<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // recoger datos del formulario
    $username = $_POST["uid"]; // User Unic Id => NombreUnico (Columna Usuarios de la BD)
    $password = $_POST["pwd"];


    require "autoload.models.php";
    require "autoload.controlers.php";

    $login = new UserContr($username, $password);
    $login->loginUser();

    //Volver a la pagina inicial
    header("Location: ../index.php");   
    // header("Location: ../view/productos.php");

}
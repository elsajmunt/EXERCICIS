<?php 
    include_once("../constants.php");
    session_start();
?>
<!DOCTYPE html>
<html>  
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Per Disseny RESPONSIU?? -->
        <link rel="stylesheet" href="../public/css/styles.css">
        <title>Cero Residuo > Mis Datos</title>
    </head>
    <body>
        <?php require "header.php"?>  <!-- HEADER -->

        <div class="content"> <!--CONTNGUT -->
            <h2>Mis Datos</h2>
            <div class="product-list"> <!-- Llista PRODUCTES php -------------->
            Nombre: Eric  <br> 
            Apellidos: Martí Rull <br>
            Teléfono: 652235998

            </div>
        </div>
         <?php require "footer.php"?> <!-- FOOTE -->
        <script src="../public/js/scripts.js"></script> 
    </body>
</html>
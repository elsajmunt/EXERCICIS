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
        <title>Cero Residuo > Ficha Tienda</title>
    </head>
    <body>
        <?php require "header.php"?>  <!-- HEADER -->    
                
        <div class="content">
        <?php include ("../includes/tiendas-inc.php");?>  

            <div class="product-fitxa"> <!--CONTNGUT Pàgina TIENDA....--> 
            <?php if($tienda!=0){?>
                <img class="product-img-fitxa" src="../public/images/tiendas/<?= $tienda["Foto"]?>" alt=<?= $tienda["Nombre"]?>                   
            </div>
            <div class="product-text-fitxa"> <!--Descripció BOTIGA -->    
                <h2><?= $tienda["Nombre"] ?></h2>
                <div><?= $tienda["Ciudad"]?></div>
                <p><?= $tienda["Direccion"]?></p>                 
            </div>
                <?php }?>   
        </div>

        <?php require "footer.php"?> <!-- FOOTER -->
        <script src="../public/js/scripts.js"></script> 
    </body>
</html>

<?php 
          include_once("../constants.php");
?>
<!DOCTYPE html>
<html>  
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Per Disseny RESPONSIU?? -->
        <link rel="stylesheet" href="../public/css/styles.css">
        <title>Cero Residuo > Ficha Producto</title>
    </head>
    <body>
        <?php require "header.php"?>  <!-- HEADER -->    
                
        <div class="content">
        <?php include ("../includes/productos-inc.php");?>  

            <div class="product-fitxa"> <!--CONTNGUT Pàgina PRODUCTE....--> 
            <?php if($producto!=0){?>
                <img class="product-img-fitxa" src="../public/images/products/<?= $producto["Foto"]?>" alt=<?= $producto["Nombre"]?>                   
            </div>
            <div class="product-text-fitxa"> <!--Descripció PRODUCTE -->    
                <h2><?= $producto["Nombre"] ?></h2>
                <div><?= $producto["Descripcion"]?></div>
                <div class="product-item-preu"><?= $producto["Precio"] ?></div>
                <p><?= $producto["DescripcionLarga"]?></p>
                <button>AÑADIR AL CARRITO</button>                    
            </div>
                <?php }?>   
        </div>

        <?php require "footer.php"?> <!-- FOOTER -->
        <script src="../public/js/scripts.js"></script> 
    </body>
</html>

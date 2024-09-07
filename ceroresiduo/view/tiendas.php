<!DOCTYPE html>
<html>  
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Per Disseny RESPONSIU?? -->
        <link rel="stylesheet" href="../public/css/styles.css">
        <title>Cero Residuo > Nuestras Tiendas</title>
    </head>
    <body>
        <?php require "header.php"?>  <!-- HEADER -->
        <div class="content"> <!--CONTNGUT -->
            <h2>Nuestras Tiendas Cero Residuo</h2>
            <div class="product-list"> <!-- Llista BOTIGUES  -------------->
                <?php
                    include ("../includes/tiendas-inc.php");
                ?>
                    <?php if($tiendas!=0){?>
                    <?php foreach($tiendas as $tienda): ?>
                <div class="product-item">
                        <a href="ficha_tienda.php?id=<?= $tienda["ID"] ?>"><img src="../public/images/tiendas/<?= $tienda["Foto"] ?>" alt=<?= $tienda["Nombre"] ?>>
                        <h3><?= $tienda["Nombre"] ?></h3></a>                      
                        <div class="product-item-preu"><?= $tienda["Direccion"] ?></div>
                        <p><?= $tienda["Ciudad"] ?></p>
                </div>   
                <?php endforeach ?>
                <?php }?>           
            </div>
        </div>
         <?php require "footer.php"?> <!-- FOOTER -->
        <script src="../public/js/scripts.js"></script> 
    </body>
</html>
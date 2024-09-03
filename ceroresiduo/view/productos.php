<!DOCTYPE html>
<html>  
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Per Disseny RESPONSIU?? -->
        <link rel="stylesheet" href="../public/css/styles.css">
        <title>Cero Residuo > Productos</title>
    </head>
    <body>
        <?php require "header.php"?>  <!-- HEADER -->

        <div class="content"> <!--CONTNGUT -->

            <h2>PRODUCTOS Zero Waste!</h2>

       <!--  <div class="product-list">  PRODUCTES mostra ------------
                <div class="product-item">
                    <a href="#"><img src="../public/images/products/JabonSolidoLavavajillas.webp" alt="Jabón Sólido Lavavajillas con Bicarbonato - 225 g">
                    <h3>Jabón Sólido Lavavajillas</h3></a>
                    <p>con Bicarbonato - 225 g</p>
                    <div class="product-item-preu">6,10€</div>
                </div>              
            </div> -->

            <div class="product-list"> <!-- Llista PRODUCTES php -------------->
                <?php
                    include ("../includes/productos-inc.php");
                ?>
                    <?php if($productos!=0){?>
                    <?php foreach($productos as $producto): ?>
                <div class="product-item">
                        <a href="ficha_producto.php?id=<?= $producto["ID"] ?>"><img src="../public/images/products/<?= $producto["Foto"] ?>" alt=<?= $producto["Nombre"] ?>>
                        <h3><?= $producto["Nombre"] ?></h3></a>
                        <p><?= $producto["Descripcion"] ?></p>
                        <div class="product-item-preu"><?= $producto["Precio"] ?></div>
                </div>   
                <?php endforeach ?>
                <?php }?>           
            </div>
        </div>

         <?php require "footer.php"?> <!-- FOOTER -->

        <script src="public/js/scripts.js"></script> 
    </body>
</html>
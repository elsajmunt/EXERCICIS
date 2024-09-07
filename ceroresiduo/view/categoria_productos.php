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
        <?php include ("../includes/categorias_productos-inc.php");?>

        <div class="content">    
            <!--<h2>NOM CATEGORIA (HIGIENE PERSONAL, HOGAR...)</h2>  -->
            <?php if($categorias!=0){?>
                <?php foreach($categorias as $categoria): ?>
            <h2><?= $categoria["Nombre"] ?></h2> <!-- NOM CATEGORIA (HIGIENE PERSONAL, HOGAR...)  -->
            <?php endforeach ?>
            <?php }?>  

            <div class="product-list"> <!-- Llista PRODUCTES per CATEGPRIES-------------->
                    <?php if($productosCategoria!=0){?>
                    <?php foreach($productosCategoria as $producto): ?>
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
        <script src="../public/js/scripts.js"></script> 
    </body>
</html>
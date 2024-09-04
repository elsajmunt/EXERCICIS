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
        <!-- <div class="product-fitxa">  Còpia CONTINGUT PRODUCTE HTML     
            <div>
                <img src="../public/images/products/MantecaSolarCorporal.webp" class="product-img-fitxa" alt="Manteca Solar Corporal">                   
            </div>
            <div class="product-text-fitxa">   
                <h2>Manteca Solar Corporal SPF 50</h2>
                <div class="product-item-preu">20,02€</div>
                <p>Este protector solar en formato manteca utiliza filtro físico o mineral y su formato en lata es ideal para viajar y transportar en avión. <br>
                    Su factor de protección es SPF 50, así que se trata de una protección alta.<br>Contiene aceite de almendras y extracto de vainilla, una combinación de ingredientes que cuidarán de tu piel y de los océanos. <br>También disponible con SPF 30. </p>
                <button>AÑADIR AL CARRITO</button>        
            </div>
        </div>-->
        <?php require "footer.php"?> <!-- FOOTER -->
        <script src="../public/js/scripts.js"></script> 
    </body>
</html>

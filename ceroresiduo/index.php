<!DOCTYPE html>
<html>  
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Per Disseny RESPONSIU?? -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
        <link rel="stylesheet" href="public/css/styles.css">
        <title>Cero Residuo</title>
    </head>
    <body>
        <?php require "view/header.php"?>  <!-- HEADER -->

        <div class="content"> <!--CONTNGUT -->

        <div class="slideshow-container">  <!--SLIDE SHOW --------------->
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="public/images/slideshow/slide-1.webp" class="img-slideshow" style="width:100%">
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>          
          <img src="public/images/slideshow/slide-2.webp" class="img-slideshow" style="width:100%"> 
         <!--     <img src="public/images/slideshow/slide-2.webp" class="img-slideshow" style="width:100%">-->
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="public/images/slideshow/slide-3.webp" class="img-slideshow" style="width:100%">
            </div>
          
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
          <!-- The dots/circles -->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div> <!--SLIDE SHOW  FINAL -->

            <h2>Tus Productos Zero Waste Favoritos</h2>

            <div class="product-list"> <!--PRODUCTES -------------->
                <div class="product-item">
                    <a href="#"><img src="public/images/products/JabonSolidoLavavajillas.webp" alt="Jabón Sólido Lavavajillas con Bicarbonato - 225 g">
                    <h3>Jabón Sólido Lavavajillas</h3></a>
                    <p>con Bicarbonato - 225 g</p>
                    <div class="product-item-preu">6,10€</div>
                 <!--   <button>Ver >></button> -->
                </div>
                <div class="product-item">
                    <a href="#"><img src="public/images/products/MantecaSolarCorporal.webp" alt="Manteca Solar Corporal">
                    <h3>Manteca Solar Corporal</h3></a>
                    <p>SPF 50</p> 
                    <div class="product-item-preu">20,02€</div>
                </div>
                <div class="product-item">
                    <a href="#"><img src="public/images/products/AcondicionadorSolidoArtesano.webp" alt="Acondicionador Sólido Artesano para Cabello Seco">
                    <h3>Acondicionador Sólido Artesano</h3></a>
                    <p>para Cabello Seco</p>
                    <div class="product-item-preu">12,50€</div>
                </div>

                <div class="product-item">
                    <img src="public/images/products/MantecaSolarCorporal.webp" alt="Manteca Solar Corporal">
                    <h3>Manteca Solar Corporal</h3>
                    <p>SPF 50</p> 
                    <p>20,02€</p>
                    <button>Ver Producto >></button>
                </div>

                <div class="product-item">
                    <img src="public/images/products/JabonSolidoLavavajillas.webp" alt="Jabón Sólido Lavavajillas con Bicarbonato - 225 g">
                    <h3>Jabón Sólido Lavavajillas</h3>
                    <p>con Bicarbonato - 225 g</p>
                    <p>6,10€</p>
                    <button>Ver >></button>
                </div>

                <div class="product-item">
                    <img src="public/images/products/AcondicionadorSolidoArtesano.webp" alt="Acondicionador Sólido Artesano para Cabello Seco">
                    <h3>Acondicionador Sólido Artesano</h3>
                    <p>para Cabello Seco</p>
                    <p>12,50€</p>
                    <button>Añadir al carrito</button>
                </div>
                
            </div>
        </div>
         <?php require "view/footer.php"?> <!-- FOOTER -->

        <script src="public/js/scripts.js"></script> 
    </body>
</html>
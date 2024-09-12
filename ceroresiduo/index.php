<?php 
        include_once("constants.php");
        session_start(); // aquí?
?>
<!DOCTYPE html>
<html>  
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Per Disseny RESPONSIU? -->
        <link rel="stylesheet" href="public/css/styles.css">
        <title>Cero Residuo</title>
    </head>
    <body>
    <?php require "view/header.php"?> <!--HEADER -->
        <div class="content"> <!--CONTNGUT -->
      
        <div class="slideshow-container">  <!--SLIDE SHOW --------------->
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="public/images/slideshow/slide-1.webp" class="img-slideshow" style="width:100%">
            </div>    
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>          
          <img src="public/images/slideshow/slide-2.webp" class="img-slideshow" style="width:100%"> 
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
          <!-- Dots/circles -->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div> <!--SLIDE SHOW  FINAL -->

          <h2>Productos Zero Waste!</h2>

        <?php require "view/footer.php"?> <!-- FOOTER -->
        <script src="public/js/scripts.js"></script> 
    </body>
</html>
<!DOCTYPE html>
<html> 
	<head>
		<title>PHP 1es Proves</title>
        <meta charset="UTF-8">
        <meta name="description" content="PHP Llenguatge de Servidor">
        <link rel="stylesheet" href="estils.css">

        <link rel="icon"  href="images/favicon.png"> <!--Favicon-->

	</head> 
	<body>
    <?php include ("menu.html");?> <!-- Inclou la Barra de MENÚ, fixa en totes les pàgines -->

        <h1>PHP Proves</h1>
        <img src="<?="img/fruita_taronja.jpg";?>"> <!--Crida Imatge que sigui...-->

        <?php
        echo "<h1>Hola Mundo</h1>; \n";
        echo "<p>Como estais?</p>; \n";
        ?>

        <!-- TAULA DE MULTIPLICAR -->
        <p>
        <?php
        $dia  = "viernes";
        $mes = 'abril';
        $dias = array('lunes','martes','miercoles');
        echo $dias[0]."<br>";
        if($dia =='jueves' || $mes=='marzo'){
            echo "hoy es tu dia de fiesta";
        }else{
            echo "toca trabajar";
        }
        $num = 6;
        echo "<table>";
        echo "<tr>";
        for ($i=0; $i <10 ; $i++) { 
            echo "<p>".$i*$num."</p>";
        }
       /* for
        $i="0"; $i <10; $i++
        { echo <p>$i</p>
            }*/
        ?>
        </p>

        <?php include ("footer.html");?> <!-- Inclou el FOOTER, Fixe en totes les pàgines -->

    </body>
</html>
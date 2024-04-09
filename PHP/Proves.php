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

        <!-- SWITCH: DIES DE LA SETMANA -->
        <p>
        <?php
        $diasetmana = "8";

        switch ($diasetmana) {
        case "1":
            echo "Avui és Dilluns";
            break;
        case "2":
            echo "Avui és Dimarts";
            break;
        case "3":
            echo "Avui és Dimecres";
            break;
        default:
            echo "Avui No és ni Dilluns ni Dimarts ni Dimecres...";
        }
        ?>
        </p>

        <!-- SWITCH: Copia 3W Schools -->
        <p>
        <?php
        $favcolor = "green";

        switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
        ?>
        </p>

        <?php
        print(“<p>Hola mundo! Hola Elsa!</p>”);
        ?>

        <?php include ("footer.html");?> <!-- Inclou el FOOTER, Fixe en totes les pàgines -->

    </body>
</html>
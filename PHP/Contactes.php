<?php
$contactes = [
    [
        "nom" => "Marta Sidral Lloses",
        "email" => "mariasidral@hotmail.com",
        "telefon" => "932459876"
    ],

    [
        "nom" => "Carles Martí Penya",
        "email" => "carlesmarti@hotmail.com",
        "telefon" => "932457136"
    ],

    [
        "nom" => "Anna Alonso Pinyol",
        "email" => "annaalonso@gmaill.com",
        "telefon" => "641258333"
    ],
];
?>

<html>
    <head>
        <title>Contactes</title>
        <meta charset=UTF8>
    </head>
    <body>

        <a href="Contactes.php?fila=0">Marta Sidral Lloses ></a><br> <!-- "fila=0..." Vol dir la Fila de l'Array (Persones) -->
        <a href="Contactes.php?fila=1">Carles Martí Penya ></a><br>
        <a href="Contactes.php?fila=2">Anna Alonso Pinyol ></a><br>

        <?php     
        if (isset($_GET["fila"])) {
            $fila = $_GET["fila"];
            print("La fila es: ".$fila."<br>");
        }
        ?>

    </body>
</html>
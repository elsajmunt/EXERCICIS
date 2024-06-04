<?php

$usuaris = 
array(
    array("dni" => 1, "nom"=>"Elsa" , "cognom"=>"zzzz"),
    array("dni" => 2, "nom"=>"Laura" , "cognom"=>"3333"),
    array("dni" => 3, "nom"=>"Jaume" , "cognom"=>"3333"),
    array("dni" => 4, "nom"=>"Paula" , "cognom"=>"dddd"),
    array("dni" => 5, "nom"=>"Josep" , "cognom"=>"dddddd"),
    array("dni" => 5, "nom"=>"Josep2" , "cognom"=>"dddddd"),
    array("dni" => 5, "nom"=>"Josep3" , "cognom"=>"dddddd"),
    array("dni" => 5, "nom"=>"Josep4" , "cognom"=>"dddddd"),
    array("dni" => 5, "nom"=>"Josep5" , "cognom"=>"dddddd"),
    array("dni" => 5, "nom"=>"Josep6" , "cognom"=>"dddddd"),
)

?>

<HTML>
    <BODY>
        Hola - ordenardor ELSA!!!

        <table border="1">

        <?php 
           foreach ($usuaris as $usuari) {                 
        ?>
            <tr>
            <td  colspan=""><?=$usuari['dni']?></td> <td  colspan=""><?=$usuari['nom']?></td><td><?=$usuari['cognom']?></td>
            </tr>
        <?php
           }
        ?>

        </table>

    </BODY>
</HTML>
<?php 
//print_r($_POST);

$elTitol = $_POST['title']; // 'title' ha de ser el mateix nom que ve del Formulari.html (name="title")
$laDescripcio = $_POST['descripcio']; // Idem
$laImatge = $_POST['image']; // Idem

$error = validaDades($elTitol, $laDescripcio, $laImatge);

function validaDades($elTitol, $laDescripcio, $laImatge) {
///
    $error = false; // No envia??

    if ( strlen($elTitol)<5 ) { //Longitud màxima caracters
        $error = true;
    ?>

<?php
    }
    return $error;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="css/estils.css">
        <title>Xarxa Social: Nova Publicació</title>
    </head>
    <body>
        <?php 
            if (!$error) {
            ?>
            <h1>Nova publicació amb les teves dades introduides:</h1>
            <p>Titol: <b><?=$elTitol?></b> <br> 
            Descripció:<?=$laDescripcio?> <br>
            Imatge:<?=$laImatge?> <br>
            </p>
            <?php
                }
                else {
        ?>
                <p class="error">El títuol ha de tenir mínim 5 caracters.</p>
    <?php
                //
            }
        ?>
    </body>
</HTML>
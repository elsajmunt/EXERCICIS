<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afegir un nou Pis</title>
</head>
    <body>
        <h2>Afegir un nou Pis</h2>
        <form method="post" action="../includes/noupis-inc.php"> 
            <input type="number" name="id" placeholder="ID pis automàtic"><br> <!-- ID serà autoincrement -->
            <input type="text" name="nompis" placeholder="Escriu el nom del Pis">*<br>
            <input type="img" name="imatge" placeholder="Escull una imatge">*<br>
            <input type="text" name="ubicacio" placeholder="Escriu la ubicació del pis">*<br>
            <input type="textarea" name="descripcio" placeholder="Escriu una breu descripció del pis"><br>
            <input type="submit" name="send" value="Afegir Pis >">
        </form> 
        <span> <!-- << AVÍS ERROR Pendent! -->
                <?php if (isset($_GET['error'])){
                echo $_GET['error'];
                }
                ?>
        </span>
    </body>
</html>
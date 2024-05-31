<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Missatge</title>
    </head>
    <body>
        <h2>Envia el teu missatge</h2>
        <form action="conexio-bd_missatge.php" method="POST">           
            <label for="missatge">Missatge:</label><br>
            <textarea id="missatge" name="missatge" rows="4" cols="50" required>Escriu aquí els teus comentaris...</textarea>      
            <input type="submit" value="Envia >>">
        </form>
    </body>
</html>
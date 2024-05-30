<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registra't</title>
    </head>
    <body>
        <h2>Registra't</h2>
        <form action="conexio-bd_registre.php" method="POST"> 
            
            <label for="nom_usuari">Nom d'Usuari:</label><br>
            <input type="text" id="nom" name="nom" required><br><br>
            
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" required><br><br>
            
            <input type="submit" value="Registra't >>">
        </form>
    </body>
</html>
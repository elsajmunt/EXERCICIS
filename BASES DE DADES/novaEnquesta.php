<html>
    <body>

    <form method="POST" action="novaEnquesta.php"> 
    <input type="text" name="titol" value="Afegeix Nom de la Nova Enquesta">
    <input type="submit" name="enviar">
    </form>

    <?php // CREAR NOVA ENQUESTA

    if (isset($_POST["titol"])) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "xarxa_social";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $titol = $_POST["titol"];
        $idUsuari = 5; // 5 és l'usuari que executa la pàgina...

        $sql = "INSERT INTO `enquesta` (`id`, `titol`, `idUsuari`) VALUES (NULL, ?, ?);";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $titol, $idUsuari); // ss= $titol, $idUsuari

        $stmt->execute();
        // Cerrar la conexión
        $stmt->close();
        $conn->close();
    } else {
        echo "No tenim dades!"; // No s'ha enviat res des del Formulari
    }
    ?>
    </body>
</html>

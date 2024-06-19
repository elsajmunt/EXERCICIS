<html>
    <body>

        <?php // CREAR NOVA ENQUESTA

            if (isset($_POST["titol_enquesta"]) && // isset Comprova si existeix. "titol_enquesta" és: name="titol_enquesta" del input del Formulari...
                isset($_POST["opcio_1"]) &&
                isset($_POST["opcio_2"])) {

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "xarxa_social"; // Nom de la Base de Dades

                // Crear conexión
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Verificar conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                $titolEnquesta = $_POST["titol_enquesta"]; // "titol_enquesta" és el que s'envia des del Formulari
                $opcio1 = $_POST["opcio_1"]; // Opció a escollir de l'equesta. Pendent
                $opcio2 = $_POST["opcio_2"]; // Opció a escollir de l'equesta. Pendent

                $idUsuari = 7; // Número d'usuari que executa la pàgina (ha d'existir a la BD!)

                $mostraResultat = $titolEnquesta; // Recull el valor que s'envia del Formulari
                $mostraResultatOpcio1 = $opcio1; 
                $mostraResultatOpcio2 = $opcio2; 
             // $mostraResultatOpcions = $opcio1 && $opcio2;

                $sql = "INSERT INTO `enquesta` (`id`, `titol`, `idUsuari`, `opcio1`, `opcio2` ) VALUES (NULL, ?, ?, ?, ?);"; // Inserta Nova Enquesta a la BD de la XarxaSocial
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssss", $titolEnquesta, $idUsuari, $opcio1, $opcio2); // ss= $titol, $idUsuari... (tantes "esses" com variables $..)?

                $stmt->execute(); 
                // Cerrar la conexión
                $stmt->close();
                $conn->close(); 

        ?>

        <h3>Has insertat aquesta nova Enquesta:</h3> <?=$mostraResultat ?> <!-- Mostra Resposta (Valor enviat del Formulari) -->
        <h3>I has afegit aquestes Opcions, per escollir: </h3>
        > <?=$mostraResultatOpcio1 ?><br>
        > <?=$mostraResultatOpcio2 ?>

        <?php
            } 
            
            else {
                echo "Afegeix la teva enquesta!"; // Es mostra si no s'envia res des del Formulari
            }   
        ?>
        
    </body>
</html>
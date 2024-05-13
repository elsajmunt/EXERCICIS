<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="css/estils_espai-privat-usuari.css">
        <title>Espai Usuari/Amic</title>
    </head>

    <body> 
        <header id=header-usuari> <!-- HEADER Pàgina Privada Usuari -->
            <div class="logo">
                <a href="index.html">
                    <img src="imatges/logo.jpg" alt="Ves a l'Inici">
                </a>
            </div>
            <div>            
                <?php // NOM USUARI, BENVINGUDA
            //  $nomUsuari = $_POST['nomusuari']; // 'nomusuari' ve del Formulari (index.html). Ha de ser mateix Nom!!
            //  $password = $_POST['password']; // 'password' ve del Formulari (index.html). Ha de ser mateix Nom!!
            //  echo " Hola $nomUsuari!"; // MOSTRA Nom Usuari
                ?>  
            </div> 
            <div class="boton">
                <button>Tanca Sesió</button>
            </div>
        </header>

        <div class="contingut-info">
            <?php
                $name = $_POST["name"];
                $cognom = $_POST["cognom"];

                $operation = $_POST["operation"];

                echo "Nom: $name <br>";
                echo "Cognom: $cognom <br>";
                // echo "operation: $operation <br>";
            ?> 
        </div>
       
        <footer> <!-- FOOTER -->
            <p>Copyright 2024 Informació Legal Política de Privacitat</p>
        </footer>

    </body>    
</html>
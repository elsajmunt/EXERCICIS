<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="css/estils_espai-privat-usuari.css">
        <title>Espai Usuari/Llista d'amics</title>

        <?php // Contingut USUARIS (Base de Dades) ---------------------------------
            $usuaris = 
            array(
                array("dni" => 1, "nomusuari"=>"Elsa" , "cognom"=>"zzzz", "password"=>"1234",),
                array("dni" => 2, "nomusuari"=>"Laura" , "cognom"=>"3333", "password"=>"4321"),
                array("dni" => 3, "nomusuari"=>"Jaume" , "cognom"=>"3333",  "password"=>"1234"),
                array("dni" => 4, "nomusuari"=>"Paula" , "cognom"=>"dddd",  "password"=>"1234"),
                array("dni" => 5, "nomusuari"=>"Josep" , "cognom"=>"dddddd" ,"password"=>"1234"),
            );
        ?>

        <?php // Contingut AMICS (Base de Dades) -----------------------------------
            $amics = 
            array(
                array("nom" => "Pepito", "cognom"=>"Grillo", "image"=>"https://m.media-amazon.com/images/I/71mkTfMrVGL.jpg"),
                array("nom" => "Pinocho", "cognom"=>"Nas Llarg", "image"=>"https://media.revistagq.com/photos/6319a89ae28aa58de71acbb4/16:9/w_1280,c_limit/Pinocchio.jpg"),
                array("nom" => "Geppeto", "cognom"=>"Constructor de ninots", "image"=>"https://www.calfuster.net/4694-thickbox_default/ninot-de-drap-amb-vestit-de-professio-arquitecte-constructor-mesures-30x29-cm.jpg"),    
                array("nom" => "Pepito", "cognom"=>"Perez", "image"=>"https://media.revistagq.com/photos/6319a89ae28aa58de71acbb4/16:9/w_1280,c_limit/Pinocchio.jpg"),
                array("nom" => "Pepet", "cognom"=>"i Marierta", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg"),
                )            
                ?> 
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
            $nomUsuari = $_POST['nomusuari']; // 'nomusuari' ve del Formulari (index.html). Ha de ser mateix Nom!!
            $password = $_POST['password']; // 'password' ve del Formulari (index.html). Ha de ser mateix Nom!!
            echo " Hola $nomUsuari!"; // MOSTRA Nom Usuari
                ?>  
            </div> 
            <div class="boton">
                <button>Tanca Sesió</button>
            </div>
        </header>
        
        <p><a href="inici_usuari.php">Veure Publicacions ></a><p> <!-- Enllaça amb Pàgina nova Publicacio ------->         
        
        <!-- FORMULARI CERTA AMICS: ---------------------------->
        <hr>
            <h2>Cerca Amics:</h2>
            <form id="altaAmic" method="POST" action="afegeixAmic.php">               
                <input type="hidden" name="id" value="-1">
                <input type="hidden" name="operation" value="add">
                <p>Nom: <input type="text" name="name">
                <p>Cognom: <input type="text" name="cognom">
                <p><input type="submit" name="enviar" value="enviar"></p>
            </form>
        <hr>

        <!-- LLISTA D'AMICS: ---------------------------->
            <h2>Llista d'Amics:</h2>          
            <?php 
                foreach ($amics as $amic) {  // Mostra AMICS i dades de Array...           
                ?>          
                <div class="publicacio">
                        <p>
                        <p class="titol-amics"> <?=$amic['nom']?>                           
                        <?=$amic['cognom']?> </p>
                        <img src="<?=$amic['image'] ?>" width="320px"><br>
                 <!-- <input type="submit" value=" >>"> -->
                        <p>
                    <hr>
                <?php
                }
                ?>
        
        <footer> <!-- FOOTER -->
            <p>Copyright 2024 Informació Legal Política de Privacitat</p>
        </footer>

    </body>
</html>
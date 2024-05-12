<!DOCTYPE html>
<html>
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="css/estils_espai-privat-usuari.css">
        <title>Inici Espai Usuari</title>

    <!-- PHP Inici ------------------------------------------------->

    <?php // Contingut USUARIS (Base de Dades) --------
    $usuaris = 
    array(
        array("dni" => 1, "nomusuari"=>"Elsa" , "cognom"=>"zzzz", "password"=>"1234",),
        array("dni" => 2, "nomusuari"=>"Laura" , "cognom"=>"3333", "password"=>"4321"),
        array("dni" => 3, "nomusuari"=>"Jaume" , "cognom"=>"3333",  "password"=>"1234"),
        array("dni" => 4, "nomusuari"=>"Paula" , "cognom"=>"dddd",  "password"=>"1234"),
        array("dni" => 5, "nomusuari"=>"Josep" , "cognom"=>"dddddd" ,"password"=>"1234"),
    );
    ?>

    <?php // Contingut PUBLICACIONS (Base de Dades) --------
    $publicacions = 
    array(
        array("id" => 1, "title"=>"Historia de l'Art" , "descripcio"=>"Breu història de l'art a Catalunya...", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg", "comentari" => "Molt interessant!!"),
        array("id" => 2, "title"=>"Cuina Mediterrania" , "descripcio"=>"Receptes de Maria, ben elavorades...", "image"=>"https://www.bcnrestaurantes.com/img-trans/category/1200-24065.jpg","comentari" => "Tot está ben explicat!!"),
        array("id" => 3, "title"=>"Turorial de Html" , "descripcio"=>"Tot sobre un llenguatge de marques", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg","comentari" => "Per a principiants va molt bé"),
        array("id" => 4, "title"=>"Tot sobre la meternitat" , "descripcio"=>"Desde l'embaras fins els primers anys de vida...", "image"=>"https://www.naturabrasil.fr/content/files/natura/fr/landings/2022/retailers/natura01.jpg", "comentari" => "M'ha semblat bona ajuda"),
    )
    ?>
    <!-- PHP Final ------------------------------------------------->

    </head>
    <body>  <!-- Pàgina Benvinguda Usuari i mostrar llista de Publicacions...-->

    <header id=header-usuari> <!-- HEADER Pàgina Privada Usuari -->
        <div class="logo">
            <a href="index.html">
                <img src="logo.jpg" alt="Ves a l'Inici">
            </a>
        </div>
        <div>            
            <?php // NOM USUARI, BENVINGUDA
            $nomUsuari = $_POST['nomusuari']; // 'nomusuari' ve del Formulari Inici Sesió (index.html). Ha de ser mateix Nom!!
            $password = $_POST['password']; // 'password' ve del Formulari Inici Sesió (index.html). Ha de ser mateix Nom!!
            echo " Hola $nomUsuari!"; // MOSTRA Nom Usuari
            ?>  
        </div> 
        <div class="boton">
            <button>Tanca Sesió</button>
        </div>
    </header>

        <!-- LLISTA DE PUBLICACIONS: ---------------------------->

        <p><a href="formulari_novaPublicacio.html">Escriu una Nova Publicació ></a><p> <!-- Enllaça amb Pàgina nova Publicacio ------->

     <!--  <div class="boton"> BOTÓ PASTILLA Enllaça amb Pàgina nova Publicacio -----
        <a href="formulari_novaPublicacio.html"> 
        <button>Nova Publicació >></button>
        </a>
        </div> --> 

        <h2>Publicacions</h2>
        
        <?php 
            foreach ($publicacions as $pubicacio) {  // Mostra PUBLICACIONS i dades de Array...           
            ?>          
            <div class="publicacio">
                    <p>
                    <?=$pubicacio['id']?><br>   

                    <h3>
                    <?=$pubicacio['title']?><br>
                    </h3>

                    <img src="<?=$pubicacio['image'] ?>" width="320px"><br>

                    <?=$pubicacio['descripcio']?><br>

                    <a onclick="" href="#">Like ></a><br>
                    <p>
                    <div class="bold">Comentaris dels usuaris:<br></div>
                    <?=$pubicacio['comentari']?></p>
                    <input type="text" name="nou_comentari" placeholder="Escriu el teu comentari"><br>
                  <!--<textarea id="w3review" name="nou_comentari"> Dona Error! Elimina reste publicacions -->
                    <input type="submit" value=" >>">
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
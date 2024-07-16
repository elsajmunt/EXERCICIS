<!DOCTYPE html>
<html>  <!-- Adaptació treta de Projecte Blog -->
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="styles.css"> -->
        <title>Agències/Llista de Pisos</title>
    </head>
    <body>
        <?php include "header.php"?>
        <div class="container"> <!-- Classes Estils amb BOOTSTRAP -->
            <?php
                $usuari = $_SESSION['username']; // Mostra usuari << Arreglar!
            //  $usuari = "Josep"; // Mostra usuari
                echo "<p>Hola $usuari :)</p>";
            ?>
            <h1>Pisos</h1>
                <a href="../Includes/noupis-inc.php"><button>Crea un nou Pis ></button></a><br>

            <div class="card" style="width: 18rem;"> <!-- Llistat de Pisos amb CARDS -->
            <?php
                session_start();
            ?>
                <?php if (isset($_SESSION['pisos'])): ?> 
                    <?php foreach($_SESSION['pisos'] as $pis): ?>
                        <div class="card-body"><!-- MOSTRA CADA PIS:..... -->      
                            <h5 class="card-title"><?= $pis["nompis"] ?></h5>                     
                            <img src= <?=$pis["imatge"] ?> class="card-img-top"></img>
                            <p><?= $pis["ubicacio"] ?></p>
                            <p><?= $pis["descripcio"] ?></p>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div>    
        </div>
        <?php include "footer.html"?>
    </body>
</html>
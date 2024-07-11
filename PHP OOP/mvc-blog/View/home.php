<!DOCTYPE html>
<html> 
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="styles.css"> -->
        <title>Blog/Home-Posts</title>
    </head>
    <body>
        <?php include "header.php"?>
        <div class="container"> <!-- Classes Estils amb BOOTSTRAP -->
            <?php
                $usuari = $_SESSION['username']; // Mostra usuari << Arreglar!
            //  $usuari = "Josep"; // Mostra usuari
                echo "<p>Hola $usuari :)</p>";
            ?>
            <h1>Posts</h1>
                <a href="../Includes/new-post.php"><button>Crea un nou Post ></button></a><br>

            <div class="card" style="width: 18rem;"> <!-- Llistat de Posts amb CARDS -->
            <?php
                session_start();
            ?>
                <?php if (isset($_SESSION['posts'])): ?>
                    <?php foreach($_SESSION['posts'] as $post): ?>
                        <div class="card-body">                      
                            <img src= <?=$post["img_url"] ?> class="card-img-top"></img>
                            <h5 class="card-title"><?= $post["titol"] ?></h5>
                            <p><?= $post["descripcio"] ?></p>
                            <span><? $post["data"] ?></span>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div>    
        </div>
        <?php include "footer.html"?>
    </body>
</html>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="styles.css"> -->
        <title>Blog/Crear Nou Post</title>
    </head>
    <body>
        <?php include "header.php"?>
        <div class="container"> <!-- Classes Estils amb BOOTSTRAP -->
            <h2>Crea un nou Post</h2>
            <form method="post" action="../Includes/create-post.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Títol</label>
                    <input type="text" name="titol" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escriu el Títol del Post">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Descripció</label>
                    <input type="textarea" name="descripcio" class="form-control" id="exampleInputPassword1" placeholder="Escriu una breu descripció...">
                </div>
                <div class="mb-3"> <!-- Imatge -->
                    <label for="formFile" class="form-label">Imatge</label>
                    <input type="file" name="imatge" class="form-control" id="formFile">
                </div>

                <button type="submit" class="btn btn-primary">Crea nou Post ></button><br>
            </form>
            <span>
                <?php if (isset($_GET['error'])){
                echo $_GET['error'];
                }
                ?>
            </span>
        </div>
        <?php include "footer.html"?>
    </body>
</html>
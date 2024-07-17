<!DOCTYPE html>
<html> 
    <head>
        <meta charset=UTF8>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="styles.css"> -->
        <title>Blog/Login</title>
    </head>
    <body>
        <?php include "header_login.php" // Header diferent al Login ?> 
        <div class="container"> <!-- Classes Estils amb BOOTSTRAP -->
        <h2>Inicia Sesió</h2>
            <form method="post" action="../Includes/login.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom d'usuari</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escriu el teu Nom d'usuari">
                    <div id="emailHelp" class="form-text">No compartirem el teu nom d'usuari amb ningú més.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Escriu el teu Password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recordar</label>
                </div>
                    <button type="submit" class="btn btn-primary">Entra ></button><br>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Includes/create-post.php" method="post" enctype="multipart/form-data">
        <input type="text" name="titol">
        <input type="text" name="descripcio">
        <input type="file" name="imatge">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?= '../'.$post['img_url'] ?>
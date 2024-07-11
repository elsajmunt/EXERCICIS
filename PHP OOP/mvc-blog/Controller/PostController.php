<?php

class PostController extends BaseController {
    public static function newPostView() {
        self::validateRequest('GET');

        Response::html(Routes::NEW_POST);
    }

    public static function createPost() {
        session_start();
        /* self::validateRequest('POST', ['titol', 'descripcio', 'imatge']); */

        // Validaciones
        // Recoger y sanitizar los datos de la request
        $titol = Sanitizer::sanitizeString($_POST['titol']);
        $descripcio = Sanitizer::sanitizeString($_POST['descripcio']);

        // Recuperar la imagen
        $imatge = $_FILES['imatge'];

        // Validaciones
        if (
            !Validator::validateTitle($titol) ||
            !Validator::validateContent($descripcio) ||
            !Validator::validateImage($imatge)
        ) {
            Response::html(Routes::NEW_POST, [
                'error' => 'Error 404: Algunos datos son incorrectos o no son válidos'
            ]);
        }

        // Revisar si la imagen se ha subido correctamente
        if (!is_uploaded_file($imatge['tmp_name']))
        Response::html(Routes::NEW_POST, ['error' => 'L\'arxiu no s\'ha pujat correctament.']);

        // Mover la imagen a la carpeta final
        [$url, $path, $randomFileName, $extension[0]] = Parser::generateFileUrl($imatge['name']);
        $src = $imatge['tmp_name'];
        $dst = $url;

        echo $src.'<br>';
        echo $dst.'<br>';

        if (!Storage::storeFileToServer($src, $dst)) {
            echo 'error';
        }
        
        // Lamamos al modelo para recuperar todos los datos de los posts (pendiente)
        $postModel = new Post(
            $titol,
            $descripcio,
            $imatge
        );

        $post = $postModel->setPost();

        // Cargamos el array de posts en la variable de sesión
        $_SESSION['posts'] = $posts;

        /* MockData::postListInSession(); */

        // Devolvemos la vista HOME
        Response::html(Routes::HOME);
    }
}
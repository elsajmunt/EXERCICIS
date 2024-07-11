<?php

class AuthController extends BaseController {
    public static function login() {
        // Validamos la request
        self::validateRequest('POST', ['username', 'password']);

        // Recoger y sanitizar los datos de la request
        $username = Sanitizer::sanitizeString($_REQUEST['username']);
        $password = $_REQUEST['password'];

        // Validaciones
        if (!Validator::validateUsername($username))
        Response::html(Routes::INDEX, ['error' => 'Error 400: La solicitud es incorrecta']);

        // Instanciamos el modelo User
        $userModel = new User($username, $password);
        $authentication = $userModel->verifyLoginUser();

        // Autenticamos
        if (!$authentication === 0) {
            Response::html(Routes::INDEX, ['error' => 'Error 403: El usuario o la contraseña no son correctos']);
        }

        // Iniciamos sesión y guardamos el id del usuario logueado
        session_start();
        $_SESSION['uid'] = $userModel->getUserId(); 

        // Recuperamos todos los objetos post
        // Instanciamos el modelo post
        $postModel = new Post(); 
        $posts = $postModel->getPost($_SESSION['uid']);

        // Cargamos el array de posts en la variable de sesión
        $_SESSION['posts'] = $posts;
        
        // Devolvemos la vista HOME
        /* MockData::postListInSession(); */
        Response::html(Routes::HOME);
    }

    public static function logout() {
        self::validateRequest('GET');

        session_start();
        session_destroy();

        Response::html(Routes::INDEX);
    }
}
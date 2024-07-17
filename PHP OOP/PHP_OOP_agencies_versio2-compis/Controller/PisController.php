<?php

class PisController extends BaseController {
    public static function newPisView() {
        self::validateRequest('GET');

        Response::html(Routes::NEW_PIS);  
    }

    public static function createPis() {
        session_start();

        // Validaciones
        // Recoger y sanitizar los datos de la request
        $nompis = Sanitizer::sanitizeString($_POST['nompis']);
        $descripcio = Sanitizer::sanitizeString($_POST['descripcio']);

        // Recuperar la imagen
        $imatge = $_FILES['imatge']; 

        // Validaciones
        if (
            !Validator::validateName($nompis) ||
            !Validator::validateContent($descripcio) ||
            !Validator::validateImage($imatge)
        ) {
            Response::html(Routes::NEW_PIS, [
                'error' => 'Error 404: Algunos datos son incorrectos o no son válidos'
            ]);
        }

        // Revisar si la imagen se ha subido correctamente
        if (!is_uploaded_file($imatge['tmp_name']))
        Response::html(Routes::NEW_PIS, ['error' => 'L\'arxiu no s\'ha pujat correctament.']);

        // Mover la imagen a la carpeta final
        [$url, $path, $randomFileName, $extension[0]] = Parser::generateFileUrl($imatge['name']);
        $src = $imatge['tmp_name'];
        $dst = $url;

        echo $src.'<br>';
        echo $dst.'<br>';

        if (!Storage::storeFileToServer($src, $dst)) {
            echo 'error';
        }
        
        // Lamamos al modelo para recuperar todos los datos de los pisos (pendiente) <<?
        $pisosModel = new Pis(
            $nompis,
            $descripcio,
            $url
        );

        $pis = $pisosModel->setPis($_SESSION['uid']);

        // Cargamos el array de pisos en la variable de sesión
        $pisosModel = new Pis(); 
        $pisos = $pisosModel->getPis($_SESSION['uid']);
        
        $_SESSION['pisos'] = $pisos;

        // Devolvemos la vista HOME
        Response::html(Routes::HOME, ['status' => 'El piso se ha subido']);
    }
}
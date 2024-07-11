<?php

class BaseController {
    protected static function validateRequest(string $method, array $params = []) {
        // Revisar el método de la request
        if ($_SERVER['REQUEST_METHOD'] !== strtoupper($method)) {
            Response::html(Routes::INDEX, [
                'error' => 'Error 400: La solicitud es incorrecta'
            ]);
        }

        // Revisar los datos de la request
        if (count($params)) {
            foreach($params as $param) {
                if (!isset($_POST[$param])) {
                    Response::html(Routes::INDEX, [
                        'error' => 'Error 400: La solicitud es incorrecta'
                    ]);
                }
            }
        }
    }
}
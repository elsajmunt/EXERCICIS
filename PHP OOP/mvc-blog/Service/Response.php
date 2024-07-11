<?php

class Response {
    public static function html(string $viewPath, array $params = []) {
        $paramStr = [];
        $fullPath = $viewPath;
        
        // Construimos una HTTP Request GET con argumentos
        if (count($params) > 0) {
            foreach($params as $key => $value) {
                array_push($paramStr, "$key=$value");
            }
    
            $paramStr = implode('&', $paramStr);
            $fullPath .= "?$paramStr";
        }

        // Redirigimos a la página con los parámetros en la url
        header("Location: $fullPath");
        die();
    }
}
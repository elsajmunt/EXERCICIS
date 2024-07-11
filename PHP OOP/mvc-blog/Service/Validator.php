<?php

class Validator {
    public static function validateUsername(string $username) {
        $validity = true;

        if (strlen($username) === 0) {
            $validity = false;
            Response::html(Routes::INDEX, ['error' => "El nom d'usuari no pot estar buit"]);
        }

        return $validity;
    }
    
    public static function validateEmail(string $email) {
        $validity = true;

        if (strlen($email) === 0) {
            $validity = false;
            Response::html(Routes::INDEX, ['error' => "L'email es necesari"]);
        }

        // Validar formato

        return $validity;
    }

    public static function validatePassword(string $password, string $confPassword) {
        $validity = true;

        if (strlen($password) < 8) {
            $validity = false;
            Response::html(Routes::INDEX, ['error' => "Contraseña demasiado corta"]);
        }

        if (!preg_match('/([A-Z]{1,})/', $password)) {
            $validity = false;
            Response::html(Routes::INDEX, ['error' => "Ha de contener al menos una mayúscula"]);
        }

        if (!preg_match('/([a-z]{1,})/', $password)) {
            $validity = false;
            Response::html(Routes::INDEX, ['error' => 'Ha de contener al menos una minúscula']);
        }

        if (!preg_match('/(\d{1,})/', $password)) {
            $validity = false;
            Response::html(Routes::INDEX, ['error' => 'Ha de contener al menos un dígito']);
        }

        if (!preg_match('/([^\w\d\s]{1,})/', $password)) {
            $validity = false;
            Response::html(Routes::INDEX, ['error' => 'Ha de contener al menos un caracter especial']);
        }

        if ($password !== $confPassword) {
            $validity = false;
            Response::html(Routes::INDEX, ['error' => 'La confirmación no coincide']);
        }

        return $validity;
    }

    public static function validateTitle(string $title) {
        $validity = true;

        if (strlen($title) === 0 ) {
            $validity = false;
            Response::html(Routes::INDEX, ['error' => "El título es obligatorio"]);
        }

        return $validity;
    }

    public static function validateContent($content) {
        $validity = true;

        if (strlen($content) === 0 ) {
            $validity = false;
            Response::html(Routes::INDEX, ['error' => "La descripció es obligatoria"]);
        }

        return $validity;
    }

    public static function validateImage($image) {
        // TODO: Implementar validación de tamaño, extensión y nombre.
        return true;
    }
}
<?php

class Auth {
    public static function authenticate(string $password, string $hash): bool {
        /* return password_verify($password, $hash); */
        return $password === $hash; // Las contraseñas se guardan en texto plano de momento
    }
}
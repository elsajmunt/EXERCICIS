<?php

class Storage {
    public static function storeFileToServer($src, $dst): bool {
        // Confirmamos que se ha realizado el movimiento sin errores
        if (!move_uploaded_file($src, $dst)) {
            return false;
        }

        return true;
    }
}
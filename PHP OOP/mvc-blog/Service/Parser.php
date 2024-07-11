<?php

class Parser {
    public static function generateFileUrl($filename): array {
        preg_match('/\.\w+$/', $filename, $extension); 
        $randomFileName = time().uniqid();
        $path = Env::FILE_PATH;
        $url = $path.$randomFileName.$extension[0];

        return [$url, $path, $randomFileName, $extension[0]];
    }
}
<?php

class Sanitizer {
    public static function sanitizeString(string $text) {
        $text = trim($text);
        $text = stripslashes($text);
        $text = htmlspecialchars($text);
        return $text;
    }
    
    public static function sanitizeEmail(string $email) {
        return filter_var($email, FILTER_SANITIZE_EMAIL);
    }
}
<?php

class Connection {
    protected function connect(){
        try {
            $con = new PDO('mysql:host=localhost;dbname=agencies', 'root',''); // CONEXIÓ A LA BASE DE DADES "Agències"
            return $con;
        } catch (PDOException $e) {
            return "Error!: ". $e->getMessage()."<br>";
        }
    }
}
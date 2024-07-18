<?php

class Connection {

    protected function connect(){
        try {
            $con = new PDO('mysql:host=localhost;dbname=prova', 'root',''); // Canviar
            return $con;
        } catch (PDOException $e) {
            return "Error!: ". $e->getMessage()."<br>";
        }
    }
}
<?php

class Connection {

    protected function connect(){
        try {
            //$con = mysqli_connect("localhost","root","","test");
           // $con = new PDO('mysql:host=localhost;dbname=test', 'root',''); // CONEXIÓ A LA BASE DE DADES
            $con = new PDO('mysql:host=localhost;dbname=pisos', 'root',''); // CONEXIÓ A LA BASE DE DADES
            return $con;
        } catch (PDOException $e) {
            return "Error!: ". $e->getMessage()."<br>";
        }
    }
}
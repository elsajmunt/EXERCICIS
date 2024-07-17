<?php

class Connection {

    protected function connect(){
        try {
            //$con = mysqli_connect("localhost","root","","test");
            $con = new PDO('mysql:host=localhost;dbname=agencies', 'root',''); // CONEXIÓ A BD
            return $con;
        } catch (PDOException $e) {
            return "Error!: ". $e->getMessage()."<br>";
        }
    }
}
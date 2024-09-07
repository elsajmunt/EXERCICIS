<?php

include_once "../model/categoria.php";

class categoriaContr extends Categoria { // Classe Categoria a la carpeta Model 
    private $nombre;     
    private $foto;
    private $descripcion;

    public function __construct($nombre=null, $foto=null, $descripcion=null){ 
        $this->nombre = $nombre;
        $this->foto = $foto;
        $this->descripcion = $descripcion;
    }

    /* Setters and Getters: */ 

    private function setNombre($nombre){ // NOMBRE
         $this->nombre = $nombre;
    }
    private function getNombre(){
        return $this->nombre;
    }

    private function setFoto($foto){ // FOTO
        $this->foto = $foto;
    }
    private function getFoto(){
       return $this->foto;
    }

    private function setDescripcion($descripcion){ // DESCRIPCION
        $this->descripcion = $descripcion;
    }
    private function getDescripcion(){
       return $this->descripcion;
    }

    /* FUNCIONS: */

        public function mostraCategoria(){ // NOM DE CADA CATEGORIA LA PÀGINA (HIGIENE PERSONAL, HOGAR...) ----     
                $resultat = $this->selectCategoria();               
                return $resultat;
        } 
        
        
        public function mostraCategorias(){ // NOM CATEGORIES A LA BARRA MENÚ (HIGIENE PERSONAL, HOGAR...) ----     
            $resultat = $this->selectCategorias();               
            return $resultat;
    }  

        public function mostraProductosCategoria(){ // PRODUCTES de la CATEGORIA -----
            $resultat = $this->selectProductosCategoria();               
            return $resultat;
    }  
} 

<?php

require_once("config.php");

class Articulos_model{
    private $conexion;
    private $articulos;
    private $totalArticulos;

    public function __construct(){
        global $bd_config;
        $this->conexion = Conectar::conexion($bd_config);
        $this->articulos = array();
    }

    public function getArticulos($pagina_actual = 1){
        global $blog_config;
        $postsPorPagina = $blog_config['posts_por_pagina'];
        $inicio = ($pagina_actual > 1)? ($pagina_actual * $postsPorPagina - $postsPorPagina ) : 0;
        $articulos = $this->conexion->prepare("
            SELECT SQL_CALC_FOUND_ROWS * FROM articulos 
            LIMIT $inicio, $postsPorPagina
        ");
        $articulos->execute();
        $this->articulos = $articulos->fetchAll();

        return $this->articulos;
    }

    public function getTotalArticulos(){
        $totalArticulos = $this->conexion->query('SELECT FOUND_ROWS() as total');
        $this->totalArticulos = $totalArticulos->fetch()['total'];
        return $this->totalArticulos;
    }

    public function getTotalPages(){
        global $blog_config;
        $postsPorPagina = $blog_config['posts_por_pagina'];
        if(empty($totalArticulos)) $this->getTotalArticulos();
        return $numeroPaginas = ceil($this->totalArticulos / $postsPorPagina);
    }
}

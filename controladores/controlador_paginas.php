<?php


class ControladorPaginas{
    
    public function inicio(){
        include_once("vistas/paginas/inicio.php");
    }

    public function error(){
        include_once("vistas/paginas/error.php");
    }

    public function salir(){
        include_once("vistas/paginas/salir.php");
    }
}



?>
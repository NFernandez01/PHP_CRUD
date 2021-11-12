<?php

class LoginModelo{

    static public function ingresoModelo($datosControlador, $tablaDB){
        $conexionBD=BD::crearInstancia();
        
        $sql= $conexionBD->prepare("SELECT usuario, clave FROM $tablaDB WHERE usuario = :usuario");
        $sql->bindParam(":usuario", $datosControlador["usuario"], PDO::PARAM_STR);
        $sql->execute();

        return $sql->fetch();

        $sql->close();
    }
}

?>
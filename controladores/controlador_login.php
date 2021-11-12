<?php

include_once("conexion.php");


class controlador_login{

    public function ingresoControlador(){
        if(isset($_POST["usuarioI"])){

            $datosControlador = array("usuario"=>$_POST["usuarioI"], "clave"=>$_POST["claveI"]);
            $tablaDB = "administradores";

            $respuesta= LoginModelo::ingresoModelo($datosControlador, $tablaDB);

            if($respuesta["usuario"] == $_POST["usuarioI"] && $respuesta["clave"] == $_POST["claveI"]){
    
                session_start();
    
                $_SESSION["Ingreso"] = true;
                header("Location:./?controlador=empleados&accion=inicio");
            }else{
                echo "ERROR AL INGRESAR";
            }

        }
    }

}

?>
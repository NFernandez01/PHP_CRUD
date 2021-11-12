<?php
include_once("modelos/empleado.php");

include_once("conexion.php");

BD::crearInstancia();

class ControladorEmpleados{

    public function inicio(){
        
      $empleados=Empleado::consultar();

        include_once("vistas/empleados/inicio.php");
    }

    public function crear(){
        if($_POST){
                $nombre =$_POST['nombre'];
                $apellido = $_POST['apellido'];
                $posicion = $_POST['posicion'];
                $email = $_POST['email'];
                $edad = $_POST['edad'];
            Empleado::crear($nombre,$apellido,$posicion, $email,$edad);
            header("Location:./?controlador=empleados&accion=inicio");
        }

        include_once("vistas/empleados/crear.php");
    }

    public function editar(){

        if($_POST){
            $id =$_POST['id'];
            $nombre =$_POST['nombre'];
            $apellido = $_POST['apellido'];
            $posicion = $_POST['posicion'];
            $email = $_POST['email'];
            $edad = $_POST['edad'];

            Empleado::editar($id,$nombre,$apellido,$posicion, $email,$edad);
            header("Location:./?controlador=empleados&accion=inicio");
        }


        include_once("vistas/empleados/editar.php");
    }

    public function borrar(){

        if($_POST){
            $id=$_POST['id'];
        
            Empleado::borrar($id);
            header("Location:./?controlador=empleados&accion=inicio");
        }
        include_once("vistas/empleados/eliminar.php");
    }

}
?>
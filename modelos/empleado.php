<?php

class Empleado{

    public $id;
    public $nombre;
    public $correo;

    public function __construct($id,$nombre,$correo){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->correo=$correo;
    }

    public static function consultar(){
        $listaEmpleados=[];
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->query("SELECT * FROM staff");

        foreach($sql->fetchALL() as $empleado) {
            $listaEmpleados[]= new Empleado($empleado['id'],$empleado['nombre'],$empleado['apellido'],$empleado['posicion'],$empleado['email'],$empleado['edad']);
        }

        return $listaEmpleados;
    }

    public static function crear($nombre,$apellido,$posicion, $email,$edad){

        $conexionBD= BD::crearInstancia();

        $sql= $conexionBD->prepare("INSERT INTO staff( nombre, apellido, posicion, email, edad) VALUES(?,?,?,?,?)");
        $sql->execute(array($nombre,$apellido,$posicion, $email,$edad));

    }

    public static function borrar($id){
        
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("DELETE FROM staff WHERE id=?");
        $sql->execute(array($id));
    }

    public static function buscar($id){
        
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("SELECT * FROM staff WHERE id=?");
        $sql->execute(array($id));
        $empleado=$sql->fetch();
        return new Empleado($empleado['id'],$empleado['nombre'],$empleado['apellido'],$empleado['posicion'],$empleado['email'],$empleado['edad']);
    }

    public static function editar($id,$nombre,$apellido,$posicion, $email,$edad){
        
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("UPDATE staff SET nombre=?, apellido=?, posicion=?, email=?, edad=? WHERE id=? ");
        $sql->execute(array($nombre,$apellido,$posicion, $email,$edad,$id));
        
    }

}
?>
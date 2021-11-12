<?php

include_once 'usuario.php';

class ApiUsuarios{

    function mostrarTodos(){
        $usuario = new Usuario();
        $usuarios = array();
        $usuarios["data"] = array();

        $res = $usuario->obtenerUsuarios();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            
                $item=array(
                    "id" => $row['id'],
                    "nombre" => $row['nombre'],
                    "apellido" => $row['apellido'],
                    "posicion" => $row['posicion'],
                    "email" => $row['email'],
                    "edad" => $row['edad'],
                );
                array_push($usuarios["data"], $item);
            }
            
            echo json_encode($usuarios);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    function mostrarPorId($id){
        $usuario = new Usuario();
        $usuarios = array();
        $usuarios["data"] = array();

        $res = $usuario->obtenerUsuario($id);

        if($res->rowCount() == 1){
            $row = $res->fetch();

            $item=array(
                "id" => $row['id'],
                "nombre" => $row['nombre'],
                "apellido" => $row['apellido'],
                "posicion" => $row['posicion'],
                "email" => $row['email'],
                "edad" => $row['edad'],
            );
            array_push($usuarios["data"], $item);
            
            $this->printJSON($usuarios);
        }else{
            $this->error('No hay elementos registrados');
        }
    }


    function agregar($item){
        $usuario = new Usuario();

        $res = $usuario->crearUsuario($item);
        $this->exito('Usuario registrado exitosamente');
    }


    function printJSON($array){
        echo  json_encode(array($array)) ;
    }

    function exito($mensaje){
        echo json_encode(array('mensaje' => $mensaje));
    }

    function error($mensaje){
        echo json_encode(array('mensaje' => $mensaje));
    }

}

?>
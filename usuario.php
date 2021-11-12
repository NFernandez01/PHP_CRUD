<?php

include_once 'db.php';

class Usuario extends DB{
    
    function obtenerUsuarios(){
        $query = $this->connect()->query('SELECT * FROM staff');
        return $query;
    }

    function obtenerUsuario($id){
        $query = $this->connect()->prepare('SELECT * FROM staff WHERE id= :id');
        $query->execute(['id' => $id]);

        return $query;
    }

    function crearUsuario($usuario){
        $query = $this->connect()->prepare('INSERT INTO staff (nombre, apellido, posicion, email, edad) 
        VALUES (:nombre, :apellido, :posicion, :email, :edad)');
        $query->execute(['nombre' => $usuario['nombre'], 'apellido' => $usuario['apellido'], 'posicion' => $usuario['posicion'], 'email' => $usuario['email'], 'edad' => $usuario['edad']]);

        return $query;
    }


}

?>

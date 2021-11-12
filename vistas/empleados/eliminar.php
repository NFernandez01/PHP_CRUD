<?php

session_start();

if(!$_SESSION["Ingreso"]){
    header("Location:./?controlador=paginas&accion=inicio");  
    exit();
}
?>


<div class="card">
    <div class="card-header">
        Agregar empleado
    </div>
    <div class="card-body">
    
        <form action="" method="post">

        <div class="mb-3">
              <label for="id" class="form-label">ID</label>
              <input Required type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID del empleado">
            </br>

            <input name="" id="" class="btn btn-success" type="submit" value="Borrar usuario">
            <a href="?controlador=empleados&accion=inicio" class="btn btn-primary">Cancelar</a>
        </div>
        </form>

    </div>
  
</div>
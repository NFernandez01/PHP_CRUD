<?php

session_start();

if(!$_SESSION["Ingreso"]){
    header("Location:./?controlador=paginas&accion=inicio");  
    exit();
}
?>


<html>
  <head>
  
  <link href="https://cdn.fancygrid.com/fancy.min.css" rel="stylesheet">
  <script src="https://cdn.fancygrid.com/fancy.min.js"></script>
  
  <script>
	document.addEventListener("DOMContentLoaded", function() {
	  new FancyGrid({
		title: 'Tabla de Empleados',
    	renderTo: 'container',
    	width: 450,
    	height: 400,
    	selModel: 'cell',
		renderTo: 'container',
		width: 600,
		height: 520,
		style: {
        'text-align': 'center'
		},
		data: {
		  proxy: {
			methods: {
				create: 'POST',
				read: 'GET',
				update: 'PUT',
				destroy: 'DELETE'
				},
		    api: {
				create: 'http://localhost/php/api_php_read/agregar.php',
         		 read: 'http://localhost/php/CRUD-PHP/load_index.php',
          		update: 'https://fancygrid.com/ajax/update.php',
         		 destroy: 'https://fancygrid.com/ajax/destroy_action.php'
		    }
		  }
		},
		selModel: 'row',
		trackOver: true,
		defaults: {      
		  resizable: true,
		  sortable: true,
		  editable: true
		},
		columns: [{
		  index: 'id',
		  title: 'ID'
		}, {
		  index: 'nombre',
		  title: 'Nombre'
		}, {
		  index: 'apellido',
		  title: 'Apellido'
		}, {
		  index: 'posicion',
		  title: 'Posicion'
		}, {
		  index: 'email',
		  title: 'Email'
		}, {
		  index: 'edad',
		  title: 'Edad'
		}
		]
	  });
	});
  </script>

  </head>
  <body>


  </br>

       <div  id="container"></div>

</br>
       <div class="card">
           <div class="card-header">
               <a name="" id="" class="btn btn-success" href="?controlador=empleados&accion=crear" role="button">Agregar empleado</a>
               <a name="" id="" class="btn btn-danger" href="?controlador=empleados&accion=borrar" role="button">Borrar empleado</a>
            </div>  
        </div>

  </body>
</html>
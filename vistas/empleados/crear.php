<?php

session_start();

if(!$_SESSION["Ingreso"]){
    header("Location:./?controlador=paginas&accion=inicio");  
    exit();
}


?>

<script>
  document.addEventListener("DOMContentLoaded", function() {
  var grid = new FancyGrid({
    title: 'Employee',
    renderTo: 'grid',
    width: 500,
    height: 500,
    data: data,
    selModel: 'row',
    trackOver: true,
    defaults: {
      type: 'string',
      width: 100,
      sortable: true,
      resizable: true,
      editable: true,
      ellipsis: true,
      vtype: 'notempty'
    },
    events: [{
      cellclick: function(grid, o) {
        form.set(o.data);
      }
    }],
    columns: [{
      index: 'id',
      width: 40,
      type: 'number',
      filter: false
    }, {
      title: 'Name',
      render: function(o) {
        o.value = o.data.name + ' ' + o.data.surname;

        return o;
      }
    }, {
      index: 'birthday',
      title: 'Birthday',
      type: 'date',
      width: 100
    }, {
      index: 'country',
      title: 'Country',
      type: 'combo',
      data: ['USA', 'England', 'Canada', 'Germany']
    }, {
      index: 'position',
      title: 'Position',
      width: 100
    }, {
      index: 'hour',
      type: 'currency',
      title: 'Hour rate',
      width: 70
    }, {
      index: 'active',
      type: 'checkbox',
      title: 'Active?',
      width: 60
    }, {
      title: 'email',
      index: 'email',
      width: 150
    }]
  });

  var comboData = [{
    country: 'USA'
  }, {
    country: 'Canada'
  }, {
    country: 'England'
  }, {
    country: 'Germany'
  }];

  var form = new FancyForm({
    renderTo: 'form',
    title: 'User Data',
    width: 290,
    height: 500,
    defaults: {
      type: 'string'
    },
    items: [{
      name: 'id',
      type: 'hidden'
    }, {
      label: 'Name',
      emptyText: 'Name',
      name: 'name'
    }, {
      label: 'SurName',
      emptyText: 'SurName',
      name: 'surname'
    }, {
      label: 'E-mail',
      emptyText: 'E-mail',
      name: 'email',
      valid: {
        type: 'email',
        blank: false,
        blankText: 'Required',
        text: 'Incorect email'
      }
    }, {
      type: 'date',
      label: 'Birthday',
      name: 'birthday'
    }, {
      type: 'checkbox',
      label: 'Active',
      name: 'active',
      value: true
    }, {
      type: 'number',
      label: 'Hour rate',
      name: 'hour',
      min: 0
    }, {
      type: 'string',
      label: 'Position',
      name: 'position'
    }, {
      type: 'combo',
      label: 'Country',
      name: 'country',
      data: comboData,
      displayKey: 'country',
      valueKey: 'country'
    }, {
      type: 'textarea',
      label: 'About',
      name: 'about'
    }],
    buttons: ['side', {
      text: 'Clear',
      handler: function() {
        form.clear();
      }
    }, {
      text: 'Save',
      handler: function() {
        var values = form.get();

        if (!values.id) {
          return;
        }

        grid.getById(values.id).set(values);
        grid.update();
      }
    }]
  });
});
</script>

<div class="card">
    <div class="card-header">
        Agregar usuario
    </div>
    <div class="card-body">
    
        <form action="" method="post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input Required type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Apellido:</label>
              <input Required type="text" class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido del empleado">
            </div>


            <div class="mb-3">
              <label for="" class="form-label">Posicion:</label>
              <input Required type="text" class="form-control" name="posicion" id="posicion" aria-describedby="helpId" placeholder="Puesto de trabajo">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Correo:</label>
              <input Required type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Correo Electronico">
            </div>


            <div class="mb-3">
              <label for="" class="form-label">Edad:</label>
              <input Required type="text" class="form-control" name="edad" id="edad" aria-describedby="helpId" placeholder="Edad">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Agregar empleado">

            <a href="?controlador=empleados&accion=inicio&id=" class="btn btn-primary">Cancelar</a>

        </form>

    </div>
  
</div>